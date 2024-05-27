<?php

    // connect to database
    $hostName = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "id_tracker";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn) {
        die("Something went wrong");
    }

    $error = '';

    // to register
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $id_no = $_POST["id_no"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users(full_name, id_no, email, password) VALUES ('$full_name', '$id_no', '$email', '$password')";

        if($conn->query($sql) === TRUE) {
        } else {
        }
    }

    // to login
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            // echo "Success";
            header("Location: ?page=dashboard");
        } else {
            echo "Error";
        }

    }
?>