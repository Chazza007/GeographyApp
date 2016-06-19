<?php
    $con = mysqli_connect("mysql10.000webhost.com", "a3170397_Chazz", "Chipper007", "a3170397_GeogApp");
    
    $name = $_POST["Name"];
    $age = $_POST["Email"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $statement = mysqli_prepare($con, "INSERT INTO user (name, username, Email, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssss", $name, $username, $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
