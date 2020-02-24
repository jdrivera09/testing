<?php 
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tutorial";

    $conn = mysqli_connect($host,$user,$pass,$db)

?>