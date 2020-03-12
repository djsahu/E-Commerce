<?php
require 'common.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = mysqli_real_escape_string($con, $_POST['address']);
$user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>