<?php
        function RegistroExitoso(){
            ?>
            <script >alert("Tu registro fue un exito");</script>
            <?php
        function DatosErroneos(){
                ?>
                <script >alert("Tu registro no se pudo realizar");</script>
                <?php
        }
    }

    include "conexion.php";

    $nombre=$_POST['nombre'];
    $apepat=$_POST['apepat'];
    $apemat=$_POST['apemat'];
    $matricula=$_POST['matricula'];
    $carrera=$_POST['carrera'];
    $usuario=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $telefono=$_POST['telefono'];

    $insertUser = "INSERT INTO estudiantes(nombre,apellidoP, apellidoM, matricula, id_carrera, correo, contraseña, telefono, id_tipo)
    VALUES('$nombre','$apepat','$apemat','$matricula','$carrera','$usuario','$contrasena','$telefono','2')";
    $resultado = mysqli_query($conexion, $insertUser);

    if($resultado){
        RegistroExitoso();
        include "login.html";
    } else {
        DatosErroneos();
        include "elegirUsuario.html";
        }
?>