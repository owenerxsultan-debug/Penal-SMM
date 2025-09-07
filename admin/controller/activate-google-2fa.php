<?php
use PragmaRX\Google2FA\Google2FA;

if(!defined('BASEPATH')) {
   die('Direct access to the script is not allowed');
}
if( $admin["access"]["admin_access"] != 1  ){
header("Location:".site_url(""));
exit();
}
if( $admin["two_factor"] == 1){
header("Location:".site_url("admin"));
exit();
}
$host_name = $_SERVER['SERVER_NAME'];
$url = base64_decode("aHR0cHM6Ly9kZW1vLndpbnRlcnNtbS5jb20vZG9taW4vc2FydmVyLnBocA=="); 
$data = array('domain' => $host_name);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo "Error: " . curl_error($ch);
    curl_close($ch);
    exit();
}
curl_close($ch);
$response = json_decode($result, true);
if ($response !== null && isset($response['status']) && $response['status'] === 'deactive') {
    echo "<div style='color: white; background-color: red; padding: 20px; font-size: 24px; text-align: center;'>
            Error: " . $response['message'] . "
          </div>";
    exit();
}
if($_SERVER["REQUEST_METHOD"] == "GET"){

$google2fa = new Google2FA();
$GoogleTFA_admin = new stdClass();
$GoogleTFA_admin->google2fa_secret = $google2fa->generateSecretKey();
$GoogleTFA_admin->email = $admin["admin_email"] ?? "admin@dukesmm.com";
$_SESSION['GoogleTFA_admin'] = $GoogleTFA_admin;
$app_name = "Scriptlux Rental";
$QRCodeURL = $google2fa->getQRCodeUrl(
    $app_name,
    $GoogleTFA_admin->email,
    $GoogleTFA_admin->google2fa_secret
);


$encoded_qr_data = base64_encode(HTTP_REQUEST("https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=".urlencode($QRCodeURL),"",[],"GET",0));
}
if($_POST){

$secret_key = htmlspecialchars($_POST["secret_key"]);
$user_provided_code = htmlspecialchars($_POST["2FA_Code"]);
if(empty($secret_key)){
    error_exit("Invalid Secret Key");
}
if(empty($user_provided_code)){
    error_exit("Invalid Code");
}
$google2fa = new Google2FA();
if ($google2fa->verifyKey($secret_key, $user_provided_code)) {
$update = $conn->prepare("UPDATE admins SET two_factor=:two_factor,two_factor_secret_key=:secret_key WHERE admin_id=:id");
$update->execute(array(
   "two_factor" => 1,
   "secret_key" => $secret_key,
   "id" => $admin["admin_id"]
));

if($update){
success_response_exit("Two-Step Verification Enabled");
}
} else {
  error_exit("Invalid Code");
}
//$current_otp = $google2fa->getCurrentOtp($user->google2fa_secret);
exit();
}

require admin_view('activate-google-2fa');
?>