<?php
$conn = new mysqli("localhost","root","");
if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS arcadecenterdb";
if($conn->query($sql)== FALSE){
    echo "Error creating database: ". $conn->error;
}
Mysqli_select_db($conn, 'arcadecenterdb');

$sql = "CREATE TABLE IF NOT EXISTS Accounts(
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
username VARCHAR(100) NOT NULL,
password VARCHAR (100) NOT NULL
)";
if($conn->query($sql)==FALSE){
    echo "Error creating Table: ". $conn->error;
}

?>