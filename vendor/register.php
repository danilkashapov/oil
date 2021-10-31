<?php
session_start();
require_once 'db.php';

$fullname = filter_var(trim($_POST['fullname']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

if($password){

    $password = md5($password);

    $query = mysqli_query($connect, "INSERT INTO `users` (`fullname`, `login`, `password`) VALUES ('$fullname','$login', '$password')");


    header('Location: ../signIn.php');
}
else {
    $_SESSION['message'] = 'Заполните пароль';
    header('Location: ../signUp.php');
}






