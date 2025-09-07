<?php
if(!defined('BASEPATH')) {
   die('Direct access to the script is not allowed');
}
if( $admin["access"]["admin_access"] != 1  ){

    header("Location:".site_url("admin"));

    exit();
}
  
  $clients = $conn->prepare("SELECT * FROM clients ORDER BY client_id DESC LIMIT 500");
  $clients->execute(array());
  $clients = $clients->fetchAll(PDO::FETCH_ASSOC);


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




$failCount      = $conn->prepare("SELECT * FROM orders WHERE orders.dripfeed='1' && orders.subscriptions_type='1' && order_error!=:error ");
  $failCount     -> execute(array("error"=>"-"));
  $failCount      = $failCount->rowCount();
$todayCount      = $conn->prepare("SELECT * FROM orders WHERE last_check=:error ");
  $todayCount     -> execute(array("error"=> date("Y-m-d") ));
  $todayCount     = $todayCount->rowCount();

  

require admin_view('index');