<?php 

$server = "127.0.0.1:3307"; // localhost
$user = "root"; // 
$pass = "";
$database = "form";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>