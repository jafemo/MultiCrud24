<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR EQUIPO</title>
  </head>
  <body>
    <?php
    if (empty($_POST["nombre"])==false && empty($_POST["ciudad"])==false && empty($_POST["conferencia"])==false && empty($_POST["division"])==false) {
//////INCLUIMOS LA BASE DE DATOS//////
      include 'equipo.php';
      $equipo=new equipo();

      $actualizareq=$equipo->ActualizarEquipo($_POST["nombre"], $_POST["ciudad"], $_POST["conferencia"], $_POST["division"]);
      if ($actualizareq==true) {
        $tabla=$equipo->DevolverEquipoNombre($_POST["nombre"]);
        foreach ($tabla as $fila) {
          echo "Nombre: ".$fila["Nombre"]."<br>";
          echo "Ciudad: ".$fila["Ciudad"]."<br>";
          echo "Conferencia: ".$fila["Conferencia"]."<br>";
          echo "Division: ".$fila["Division"]."<br>";
        }
//////ENLACE PARA ACTUALIZAR UN REGISTRO//////
        echo "<br>";
        echo "<a href='actualizarequipo.php?nombre=".$fila["Nombre"]."&ciudad=".$fila["Ciudad"]."&conferencia=".$fila["Conferencia"]."&division=".$fila["Division"]."'>Actualizar registro.</a>";

//////ENLACE PARA BORRAR REGISTRO//////
        echo "<br>";
        echo "<a href='listaequipos.php'>Borrar registro.</a>";
    }else {
      echo "Error en la actualización";
    }
  }

    ?>
  </body>
</html>
