<?php

$username="root";
$host="localhost";
$password="";
$db_name="e_book";

$conn=new mysqli($host,$username,$password,$db_name);


if($conn->connect_error)
{
    die("Connection Failed : ".$conn->connect_error);
}


?>