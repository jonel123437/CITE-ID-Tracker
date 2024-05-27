<?php
    include "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            // User found, retrieve the full name
            $row = $result->fetch_assoc();
            $fullName = $row['full_name'];
            $id_no = $row["id_no"];
            // Start the session
            session_start();
            
            // Store the full name in a session variable
            $_SESSION['full_name'] = $fullName;
            $_SESSION["id_no"] = $id_no;

            // Redirect to the dashboard
            header("Location: ?page=dashboard");
        } else {
        }
    }
?>