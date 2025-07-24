<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminhub";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
    die("error detected".mysqli_error($conn));
}
else{
    echo"Connection successful";
}
?>