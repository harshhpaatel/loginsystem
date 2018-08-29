<?php

$host="localhost";
$user="db_user";
$password="db_password";
$db="id6882724_livestream";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $db) or die(mysqli_error($con));



?>
