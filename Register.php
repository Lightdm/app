<?php
    $con = mysqli_connect("mysql12.000webhost.com", "a6918254_admin", "qwasqwas123", "a6918254_dbuser");
    
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $statement = mysqli_prepare($con, "INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($statement, "sss", $name, $email, $password);
    mysqli_stmt_execute($statement);
    
    $response = array();
    $response["success"] = true;  
    
    echo json_encode($response);
?>