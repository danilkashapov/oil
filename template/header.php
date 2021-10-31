<?php

require "vendor/db.php";
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Нефтяные рассчёты</title>
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="shortcut icon" type="image/png" href="../src/images/gas.svg"/>

</head>
<body>
<div class="page">
    <header>
        <div class="header">
            <div class="logo">
                <div class="logotype"></div>
                <a href="../index.php" class="logo-title">Нефтяные рассчёты</a>
                <!-- <img src="/src/images/oil-station.png" alt="logo"> -->
            </div>
            <nav>
                <a href="../index.php" class="nav-link">Главная</a>
<!--                <a href="../signUp.php" class="nav-link">Регистрация</a>-->
<!--                <a href="../signIn.php" class="nav-link">Авторизация</a>-->
                <?php if ($_SESSION['user']) {?>
                    <a href="../vendor/logout.php" class="nav-link">Выход</a>
                <?php } else if(!$_SESSION['user']) {?>
<!--                    <a href="../index.php" class="nav-link">Главная</a>-->
                    <a href="../signIn.php" class="nav-link">Авторизация</a>
                    <a href="../signUp.php" class="nav-link">Регистрация</a>

                <?php }?>
            </nav>

        </div>
    </header>