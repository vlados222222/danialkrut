<?php
$host = "MySQL-8.0";
$user = "root";
$pass = "";
$dbname = "prokatDB";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn) {
    die("Че там" . mysqli_connect_error());
}
?>