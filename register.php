<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Customs</title>
    <link rel="stylesheet" type="text/css" href="css/drcustoms.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<form action="php/register.php" method="post">
  <div class="login">

    <h1><b>Register</b></h1>

    <div class="input-group">
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" class="inputbox" required>
    </div>

    <div class="input-group">
        <label for="email"><b>E-Mail</b></label>
        <input type="email" placeholder="Enter E-mail" name="email" class="inputbox" required>
    </div>

    <div class="input-group">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" class="inputbox" required>
    </div>

    <div class="input-group">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" class="inputbox"  required>
    </div>

    <div class="input-group">
        <label for="cpsw"><b>Confirm Password</b></label>
        <input type="password" placeholder="Comfirm Password" name="cpsw" class="inputbox"  required>
    </div>

    <label for="remember" class="remember"><input type="checkbox" checked="checked" name="remember"> Remember me</label>
    <div class="buttonslogin">
        <button type="submit" class="button"><b>Register</b></button>
        <a href="login.php" class="buttonForA"><b>Login</b></a>
    </div>
    <span class="error" id="msg">
    <?php
    session_start();
      if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
          unset($_SESSION['error']); // Clear the error message from the session
      }
    ?>
    </span>
  </div>
</form> 