<?php
$host = "127.0.0.1:3325";
$user = "root";
$pass = "";
$dbname = "login";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if($conn){
    echo "connection";
}
?>