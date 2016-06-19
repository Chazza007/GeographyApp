<?php
    $con = mysqli_connect("http://geographyapp.net16.net", "a3170397_Chazz", "Chipper007", "a3170397_GeogApp");
    
    $name = $_POST["name"];
    $age = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $statement = mysqli_prepare($con, "INSERT INTO User (name, username, email, password) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sssss", $name, $username, $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>
