<?php
session_start();
require_once("db.php");

$login = $_POST['login'];
$password = $_POST['password'];

if($login == "Manager" and $password == "Rent2024!"){
    header("Location: indexmanager.php");
} else {
    $sql = "SELECT * FROM users WHERE login = 'login' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['user'] = $login;
        header("Location: account.php");
    } else {
        echo"Че там?";
    }
}
?>