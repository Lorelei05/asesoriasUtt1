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
    $matricula=$_POST['clave'];
    $materia=$_POST['materia'];
    $edificio=$_POST['edificio'];
    $carrera=$_POST['carrera'];
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    $telefono=$_POST['telefono'];

    $insertUser = "INSERT INTO administrativos(nombre,ape_Pat, ape_Mat, clave, id_materia, id_edificio, id_carrera, correo, contraseña, telefono, id_tipo)
    VALUES('$nombre','$apepat','$apemat','$matricula','$materia','$edificio','$carrera','$correo','$contrasena','$telefono','1')";
    $resultado = mysqli_query($conexion, $insertUser);

    if($resultado){
        RegistroExitoso();
        include "login.html";
    } else {
        DatosErroneos();
        include "elegirUsuario.html";
        }
?>