<?php
$connect = mysqli_connect('localhost', 'root', '', 'oil');

if (!$connect) {
    die('Error connect to DataBase');
}

