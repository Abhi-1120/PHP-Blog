<?php
session_start();
$_SESSION['login']=="";

session_unset();
$_SESSION['user']="You have logged out successfully..!";
header('location: index.php');
?>