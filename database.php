<?php 

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "first_db";

$con = mysqli_connect($servername,$dbUsername, $dbPassword, $dbName);

if (!conn) {
    die("Connection failed: ".mysqli_connect_error());
}
