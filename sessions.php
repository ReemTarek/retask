<?php
session_start();
if(isset($_SESSION["email"]))
{
    echo"weclome";
    echo "<a href='delete.php'>delete</a>";
    echo "<a href='updateforn.php'>update</a>";

}
?>
