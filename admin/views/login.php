<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>ScriptLux Official Rental</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
@charset "utf-8";
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
html {
  font-size: 16px;
}
body {
  font-family: Arial, sans-serif;
}
#container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 100%;
  height: 100vh;
  padding: 15px;
  background-image: linear-gradient(45deg, #0ae9f5, #EA4C89, #0ae9f5, #EA4C89);
  overflow: hidden scroll;
}
.box {
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
  width: 100%;
  max-width: 300px;
  height: auto;
  margin: auto;
}
.form-box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
  z-index: 999;
  width: 100%;
  padding: 30px 20px;
  border: solid 1px rgba(0, 0, 0, .5);
  border-radius: 16px;
  box-shadow: 4px 4px 10px rgba(0, 0, 0, .1),
             -4px -4px 10px rgba(0, 0, 0, .1);
  background-color: rgba(255, 255, 255, .1);
  -webkit-backdrop-filter: blur(5px);
  backdrop-filter: blur(5px);
}
.ic-account {
  width: 60px;
  height: 60px;
  margin-bottom: 10px;
  border: solid 1px rgba(255, 255, 255, .5);
  border-radius: 50%;
  background-color: rgba(255, 0, 0, .2);
  background-image: url(../img/admin/ic_account.svg);
  background-position: center;
  background-size: 40px;
  background-repeat: no-repeat;
}
.login-form-input {
  width: 100%;
  height: 50px;
  margin: 10px auto;
  padding: 15px 20px;
  border: solid 3px rgba(255, 239, 18, .5);
  border-radius: 70px;
  background-color: rgba(252, 186, 3, .2);
  color: #fcba03;
  font-size: 1rem;
  outline: none;
}
.login-form-input::placeholder {
  color: rgba(0, 0, 0, .8);
  
}
.two_factor_input::placeholder {
  font-size: 10px;
}
.login-form-btn {
  width: 100%;
  height: 50px;
  margin: 20px auto 10px;
  border: none;
  border-radius: 25px;
  background-color: #fff;
  color: #3d3935;
  font-size: 1.25rem;
  outline: none;
  cursor: pointer;
}
.text {
  margin: 0;
  padding: 0;
  color: #fff;
  font-size: 14px;
  text-align: center;
}
.text a {
  color: #fff;
}
.login-form-btn:hover,
.text a:hover {
  opacity: .8;
}
</style>
  </head>
  <body>
    <div id="container">
      <div class="box">
        <div class="form-box">
<div class="ic-account"></div>
<?php if( $success ): ?>
<div class="alert alert-success"><?php echo $successText; ?></div>

<?php endif; ?>
<?php if( $error ): ?>
<div class="alert alert-danger"><?php echo $errorText; ?></div>
<?php endif; ?>
<form name="login-form" action="#" method="post">
<input class="login-form-input" type="username" name="username" placeholder="Enter Username..." required>
<input class="login-form-input" type="password" name="password"  placeholder="Password" required>
<input class="login-form-input two_factor_input" type="number" name="two_factor_code"  placeholder="Enter Code from Authenticator App (If Setup)">
<div class="form-check">
<input type="checkbox" class="form-check-input" name="remember"id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1" >Remember me</label>
</div>
<button class="login-form-btn" type="submit"> 🔑Login </button>

          </form>
        </div>
      </div>
    </div>
  </body>
</html>