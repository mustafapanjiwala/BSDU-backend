<?php

session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['fname'];
    $Program=$_POST['programmes'];
    $Course=$_POST['course'];
    $Mobile=$_POST['number'];
    $Email=$_POST['mail'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    
//    $c=mysql_connect("localhost","root","");
//    mysqli_select_db("login");
    $ins="insert into student_entries (fname, programmes, course, number, mail, state, city) values ('$name','$Program', '$Course', '$Mobile' , '$Email', '$state', '$city' )";
    
    $query = mysqli_query($ins,$conn);
    if($ins)
    {
        echo  "inserted";
    }
    else
    {
        echo "error";
    }
}

?>