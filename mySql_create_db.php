<?php 

// conntecting to database
$servername = "localhost";
$username = "root";
$password = "";


// create a connection object 

$conn = mysqli_connect($servername, $username, $password);

//create database

$sql = "CREATE DATABASE testDB";
mysqli_query($conn, $sql);

// die if connection was not successfull

if(!$conn){
    die("we failed to connect " . $conn_error() );
}
else{

    echo "connection was successful";
}

?>