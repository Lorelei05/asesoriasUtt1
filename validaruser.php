<?php
        function alerta(){
            ?>
            <script >alert("Los Datos ingresados son incorrectos");</script>
            <?php
        }
require 'conexion.php';
session_start();

$usuario =$_POST ['correo'];
$contra =$_POST ['contrasena'];

$q = "SELECT nombre, COUNT(*) AS verificar FROM estudiantes WHERE correo ='$usuario' AND contraseña='$contra'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

$q2 = "SELECT nombre, COUNT(*) AS verificar2 FROM administrativos WHERE correo ='$usuario' AND contraseña='$contra'";
$consulta2 = mysqli_query($conexion,$q2);
$array2 = mysqli_fetch_array($consulta2);

if($array['verificar']>0){
    $_SESSION['nombre']= $array['nombre'];
    header("location:homealumno.html");
}else{
    if($array2['verificar2']>0){
        $_SESSION['nombre']= $array2['nombre'];
        header("location:homemaestro.html");
    }else{
    alerta();
        include "login.html";
    }
}
?>