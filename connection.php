<?php
$Servername ="localhost";
$username ="root";
$password ="";
$dbname = "saksham";
$conn= mysqli_connect($Servername,$username,$password,$dbname);

if($conn)
{
    echo"connnection established";
}
else{
    echo"connection failed";
}
?>