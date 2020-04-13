<?php


function connect()
{  $servername="localhost";
   $username="root";
   $password="";
   $database="navbar";

$conn=new mysqli($servername,$username,$password,$database);
return $conn;
}



?>