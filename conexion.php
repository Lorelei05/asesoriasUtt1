<?php

$servidorbd = "localhost"; //127.0.0.1 //servidor donde se va estar ejecutando
$usuario = "root"; //tipo de usuario
$pass = "";
$bd = "asesoriasutt";// nombre de la base datos

$conexion = mysqli_connect($servidorbd,$usuario,$pass,$bd);//Conexion de la base de datos

?>