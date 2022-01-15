<?php

session_start();

$name = "";
$phoneNumber = "";
$email = "";

$db = mysqli_connect('localhost', 'root', 'root', 'test_form_db') or die('cannot connect');



$name = mysqli_real_escape_string($db, isset($_POST['name']) ? $_POST['name'] : '');
$phoneNumber = mysqli_real_escape_string($db, isset($_POST['phone']) ? $_POST['phone'] : '');
$email = mysqli_real_escape_string($db, isset($_POST['email']) ? $_POST['email'] : '');

$query = "INSERT INTO user (name, phoneNumber, email) VALUES ('$name', '$phoneNumber', '$email')";
mysqli_query($db, $query);

?>