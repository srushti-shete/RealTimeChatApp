<?php
    $hostname = "localhost:7006";
    $username = "srushti";
    $password = "srushti";
    $dbname = "chatapp";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>