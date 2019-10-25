<?php
session_start();
$name="";
$email="";
$password="";
if(isset($_SESSION["email"]))
{$con = mysqli_connect("localhost", "root", "", "mydb");//connect to the database

// Create a query for the database
$query = 'SELECT * FROM users WHERE email  = "'.$_SESSION["email"].'" ';
$res=mysqli_query($con, $query);
// If the query executed properly proceed

if($res){

$row=mysqli_fetch_array($res);
$name=$row['name'];
$email=$row['email']; 
$password=$row['password'];
}

}


else {

echo "Couldn't issue database query<br />";


}

// Close connection to the database
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            update data
        </title>
    </head>
    <body>
        <form action="update.php" method="post">
          
            <label>Name:</label>
            <br>
            <input type="text" name="name" value="<?php echo $name?>">
            
            <br>
            <label>email:</label>
            <br>
            <input type="email" name="email" value="<?php echo $email?>">
            <br>
            <label>password:</label>
            <br>
            <input type="password" name="pass" value="<?php echo $password?>">
            <br>
            <input type="submit" name="submit">
       </form>
    </body>
</html> 
