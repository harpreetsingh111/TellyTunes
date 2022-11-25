<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';

$email = isset($_POST['email']) ? $_POST['email'] : '';

$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

$subject = isset($_POST['subject']) ? $_POST['subject'] : '';

$message = isset($_POST['message']) ? $_POST['message'] : '';


        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "tellytune";

        $conn = new mysqli($servername,
                $username, $password, $database
            );

        if ($conn->connect_error) {
        die("Connection failed: "
            . $conn->connect_error);
        }
        echo "Connected successfully";

        $sql = "INSERT INTO contact_table ('id','name', 'email', 'phone', 'subject', 'message') VALUES (1, 'rohit','rohit@gmail.com',123546, 'subject text','message')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
?>