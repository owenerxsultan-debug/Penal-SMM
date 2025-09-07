<?php
if (route(3) == "ip") {
    $ipType = ($_POST['ip_type'] == 1 || $_POST['ip_type'] == 2) ? $_POST['ip_type'] : null;
    $ip = filter_var($_POST['ip'], FILTER_SANITIZE_STRING);
    if (!empty($ip) && $ip != obfuscate_provider_key($admin["ip"])) {
        $update = $conn->prepare("UPDATE admins SET ip_type = :ipType, ip = :ip");
        $update->execute(array("ipType" => $ipType, "ip" => $ip));
    } else {echo "Please provide a valid IPv6 address.";}}
$adminQuery = $conn->prepare("SELECT * FROM admins");
$adminQuery->execute();
$admin = $adminQuery->fetch(PDO::FETCH_ASSOC);
$inputValue = (isset($_POST['ip']) && route(3) == "ip") ? htmlspecialchars($_POST['ip']) : obfuscate_provider_key($admin["ip"]);
?>
<div class="col-md-8">
  <div class="panel panel-default">
    <div class="panel-body">
      <form id="ipForm" action="admin/settings/modules/ip" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="" class="control-label">IP Security</label>
          <select class="form-control" name="ip_type">
            <option value="1" <?= $admin["ip_type"] == 1 ? "selected" : null; ?>>Disabled</option>
            <option value="2" <?= $admin["ip_type"] == 2 ? "selected" : null; ?>>Enabled</option>
          </select>
        </div>
        <div class="form-group">
          <label for="" class="control-label">Your IPv6 Address</label>
          <input type="text" class="form-control" name="ip" value="<?= $inputValue ?>">
        </div>
        <center><button type="submit" class="btn btn-primary w-100">Save Changes</button></center>
      </form>
    </div>
  </div>
</div>
<script>document.getElementById("ipForm").addEventListener("submit",function(e){var a;'<?= htmlspecialchars(obfuscate_provider_key($admin["ip"])) ?>'===document.getElementsByName("ip")[0].value.trim()&&(alert("Please provide a valid IPv6 address."),e.preventDefault())});</script>



<div class="col-md-8">
  <div class="panel panel-default">
    <div class="panel-body">
      <form action="" method="post" enctype="multipart/form-data">
  
<div class="form-group">
          <label for="" class="control-label">Affiliate System</label>
          <select class="form-control" name="affiliates_status">
         
          <option value="1"  <?= $settings["referral_status"] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $settings["referral_status"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>
  <div class="form-group">
          <label for="" class="control-label">Commission rate, %</label>
          <input type="number" class="form-control" name="commision" value="<?=$settings["referral_commision"]?>">
        </div>
        <div class="form-group">  
          <label for="" class="control-label">Minimum payout</label>
          <input type="number" class="form-control" name="minimum" value="<?=$settings["referral_payout"]?>">
        </div>
        
<hr>
<div class="childpanels-settings">
<div class="form-group">
          <label for="" class="control-label">Child Panel Selling</label>
          <select class="form-control" name="selling">
         
<option value="1"  <?= $settings[""] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $settings["childpanel_selling"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>
        

<div class="form-group">
<label for="" class="control-label">Child Panel Price</label>
<input type="text" class="form-control" name="price" value="<?=$settings["childpanel_price"]?>">
</div> 
<div style="padding:4px; background-color:lightgrey;border:1px solid #000; border-radius:4px;width:max-content;">
<small>Base Child Panel Price : ₹ 500</small></div>

</div>

<hr>


<div class="form-group">
          <label for="" class="control-label">Free Balance</label>
          <select class="form-control" name="freebalance">
         
                    <option value="1"  <?= $settings["freebalance"] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $settings["freebalance"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>
<div class="form-group">
          <label for="" class="control-label">Free Amount</label>
          <input type="text" class="form-control" name="freeamount" value="<?=$settings["freeamount"]?>">
        </div> 
<hr>
<div class="form-group">
          <label for="" class="control-label">Video Promotion</label>
          <select class="form-control" name="promotion">
         
                    <option value="1"  <?= $settings["promotion"] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $settings["promotion"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>

<div class="form-group">
          <label for="" class="control-label">Updates Logs</label>
          <select class="form-control" name="updates_show">
         
                    <option value="1"  <?= $general["updates_show"] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $general["updates_show"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>


<div class="form-group">
          <label for="" class="control-label">Mass Order</label>
          <select class="form-control" name="massorder">
         
                    <option value="1"  <?= $general["massorder"] == 1 ? "selected" : null; ?>>Disabled</option>
          <option value="2" <?= $general["massorder"] == 2 ? "selected" : null; ?>>Enabled</option>
          
          </select>
        </div>


<hr>
        <center><button type="submit" class="btn btn-primary w-100">Save Changes</button></center>
      </form>
      
    </div>
  </div>

<?php  

$google_login = json_decode($settings["google_login"],true);

?>

<?php if($google_login["purchased"] != "1"){ ?>
<div data-addon="google_login" class="product-card">
  <div class="product-icon"><img src="https://i.postimg.cc/WbnmCB4D/google.png" alt="Product Icon"></div>
  <div class="product-details">
    <h2 class="product-name">Google Login Addon</h2>
    <p class="product-price">₹200.00</p>
  </div>
  <button class="btn btn-primary">Buy Now</button>
</div>

<?php } else { ?>
 <div class="settings-emails__block-body">
<table>
<thead>
<tr>
<th class="settings-emails__th-name"></th>
<th class="settings-emails__th-actions"></th>
</tr>
</thead>
<tbody>
<tr class="settings-emails__row">
                    <td>
                        <div class="settings-emails__row-name">Google Login</div>
<div class="settings-emails__row-description">Users will be able to login with their Google Account to the panel.</div>
</td>

<td class="settings-emails__td-actions">  
    <label class="switch">
      <input  data-addon="google_login"  type="checkbox" class="switch-input addon"  <?php echo $google_login["status"] ? "checked" : "";?>>
      <span class="switch-label" data-on="On" data-off="Off"></span>
      <span class="switch-handle"></span>
    </label>

 </td>
</tr>
</tbody>
</table>

<?php } ?>



</div>