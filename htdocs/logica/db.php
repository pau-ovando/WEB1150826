<?php
$host = '127.0.0.1:3306';
$user = 'root';
$pass = 'admin123';
$dbName = 'crud_app';

/*
$host = 'sql207.infinityfree.com';
$user = 'if0_40214126';
$pass = 'o1KaeFY7fjR';
$dbName = 'if0_40214126_crud_app';
*/

$conn = new mysqli( $host,$user,$pass,$dbName);

if( $conn -> connect_error){
    die('Error en la conexion de mi db :( : '.$conn->connect_error);
}
    
?>