<?php

         session_start();
         if(isset($_POST["submit"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $pass=$_POST["pass"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "crud";
         
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "INSERT INTO users(name,email,password)VALUES ('$name','$email','$pass')";

            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "New record created successfully";
               $_SESSION["email"] = $email;
               header("Location:sessions.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
    



?>