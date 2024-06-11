<?php

$servername="localhost";
$userrname="id22304651_elias";
$password="Elias18.";
$dbname="id22304651_todo_list";

$conn=new mysql($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }
    ?>