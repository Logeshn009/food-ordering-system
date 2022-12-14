<?php
session_start();
$servername = "nkn.czdspcd0kamf.us-east-1.rds.amazonaws.com";
$server_user = "admin";
$server_pass = "rajeshpv";
$dbname = "food";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>