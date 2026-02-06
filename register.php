<?php
require_once("db.php");
$login = $_POST["login"];
$password = $_POST["password"];
$fio = $_POST["fio"];
$phone = $_POST["phone"];
$passport = $_POST["passport"];
$sql = "INSERT INTO users (login, password, fio, phone, passport) VALUES ('$login', '$password', '$fio', '$phone', '$passport')";
$conn->query($sql);

header("Location: index.php");
?>