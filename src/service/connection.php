<?php
$host = "localhost";
$dbname = "kasir_digital";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

return $conn;
