<?php

    $servername = "localhost";
    $username = "root";
    $password = "tiger";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE InfoHub";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    $conn->close();
echo"<br>This code is executed by Aakriti Gupta!";
    
?>