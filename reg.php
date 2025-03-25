<?php
require_once'../db/connection.php';
$conn -> prepare('insert into users(login, fio, password, email, tel)) value(?, ?, ?, ?, ?)') ->
execute(array($_POST['login'], $_POST['fio'], $_POST['password'], $_POST['email'], $_POST['tel']));
?>