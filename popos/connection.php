<?php
$dbSetup = "mysql:host=localhost;dbname=popo;charset=utf8";
$dbUser = "root";
$dbPass = "root";
$dbErrMode = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conn = new PDO($dbSetup, $dbUser, $dbPass, $dbErrMode);
?>