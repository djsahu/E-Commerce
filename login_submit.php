<?php
require 'common.php';
?>
<?php
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: index.php?email_error=enter correct email');
}
$password = md5($_POST['password']);
if (strlen($password) < 8) {
  header('location: index.php?password_error=Enter correct password');
}
?>
