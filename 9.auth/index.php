<?php
  //Turn on all errors
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');

  // Initialize session for this request.
  session_start();
?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Authentication example</title>
</head>
<body>
  <h1>Hello, <?php echo !empty($_SESSION['auth'])?$_SESSION['auth']['name']:"Guest"  ?>!</h1>
  <a href="login.php">Login page</a><br>
  <a href="profile.php">Profile page</a><br>
  <a href="exit.php">Exit page</a><br>
</body>
</html>