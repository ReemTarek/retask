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

            $sql = "UPDATE users SET name='".$name."', email='".$email."', password='".$pass."'  WHERE email='".$_SESSION['email']."'";
            $_SESSION["email"]=$email;
            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "record Updated successfully";
               header("Location:sessions.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
        
    



?>