<h1>Estas dentro de la interfaz de alumno</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
          session_start();
           $nom= $_SESSION['nombre'];

           if(!isset($nom)){
             header("location:login.html");
           }else{  
             echo "<h2> Bienvenido</h2>";
           }
          ?>
    <table>
        <thead>
          <tr>
            <th class="inf">Información del profesor</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include ("conexion.php");

            $query = "SELECT administrativos.nombre AS'nombre', administrativos.ape_Pat AS'Apellido Paterno', administrativos.ape_Mat AS 'Apellido Materno', materias.materia AS'Materia',
             edificio.edificio AS'Edificio', carreras.carrera AS'Carrera', administrativos.telefono AS'Telefono' FROM administrativos
            INNER JOIN materias ON administrativos.id_materia = materias.id_materias INNER JOIN edificio ON administrativos.id_edificio = edificio.id_edificio INNER JOIN carreras ON administrativos.id_carrera = carreras.id_carrera";
            $resul = $conexion->query($query);

            while($row = $resul->fetch_assoc()){
              ?>
              <tr>
                <td>
                <label for="">Nombre:</label><?php echo $row['nombre'] .' '. $row['Apellido Paterno'];?>
                <br>
                <br>
                <label for="">Materia: </label><?php echo $row['Materia'];?>
                <br>
                <br><label for=""> Edificio: </label><?php echo $row['Edificio'];?>
                <br>
                <br>
                <label for=""> Carrera que imparte: </label><?php echo $row['Carrera'];?>
                <br>
                <br><label for=""> Telefono: </label><?php echo $row['Telefono'];?>
              </td>
              </tr>
              <?php
            }
            ?>
        </tbody>
       </table>
       <a href="cerrarsesion.php">Cerrar sesion</a>
</body>
</html>
