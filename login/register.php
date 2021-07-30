<?php
$host = "127.0.0.1:3325";
$user = "root";
$pass = "";
$dbname = "login";
$conn = mysqli_connect($host, $user, $pass, $dbname);
if($conn){
    echo "connection";
}

if(isset($_POST['submit']))
{
    $name = $_POST['fname'];
    $program = $_POST['programmes'];
    $course = $_POST['course'];
    $number = $_POST['number'];
    $email = $_POST['mail'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    

    $query = "INSERT into student_entries(fname, programmes, course, number, mail, state, city) values('$name', '$program', '$course', '$number', '$email', '$state', '$city')";
    
    $result = mysqli_query($conn, $query);
    
    if($result)
    {
        echo "data inserted";
    }
}
?>