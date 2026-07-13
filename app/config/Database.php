<?php
$host = "localhost";
$port = "3306";
$user = "adtt";
$password = "adityanur123";

$conn = mysqli_connect($host, $user, $password, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
