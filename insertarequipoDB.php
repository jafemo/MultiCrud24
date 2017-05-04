<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSERTAR EQUIPOS NUEVOS</title>
  </head>
  <body>
    <?php
//////PRIMERO SE COMPRUEBA QUE ESTAN RELLENADOS TODOS LOS CAMPOS//////
    if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {

//////INCLUIMOS LA BASE DE DATOS//////
      include 'equipo.php';
      $equipo=new equipo();
      $resultado=$equipo->Insertarequipo($_POST["nombre"],  $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);
      echo "ULTIMO REGISTRO: <br>";
      $tablaequ=$equipo->DevolverEquipoNombre($_POST["nombre"]);
      foreach ($tablaequ as $fila) {
        echo "Nombre: " .$fila["Nombre"] ."<br>Ciudad: " .$fila["Ciudad"] ."<br>Conferencia: " .$fila["Conferencia"] ."<br>Division: " .$fila["Division"];
      }

//////ACTUALIZAMOS//////
      echo "<br>";
      echo "<a href='actualizarequipo.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";

//////ENLACE PARA BORRAR UN REGISTRO//////
      echo "<br>";
      echo "<a href='listaequipos.php'>Borrar registro.</a>";
      }else {
        echo "<a href='insertarequipo.php'> Debes rellenar todos los campos </a>";
      }
     ?>
  </body>
</html>
