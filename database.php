<?php
try 
{
    $conn = mysqli_connect("localhost", "root", "", "login_register");
} 
catch (Exception $e) 
{
    echo "Hiba". $e->getMessage();
}
?>