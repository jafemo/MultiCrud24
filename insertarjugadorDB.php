<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSERCCION DE NUEVOS JUGADORES</title>
  </head>
  <body>
    <?php
//////PRIMERO SE COMPRUEBA QUE ESTAN RELLENADOS LOS CAMPOS//////
    if (empty($_POST['codigo'])==false && empty($_POST['nombre'])==false && empty($_POST['procedencia'])==false &&
        empty($_POST['altura'])==false && empty($_POST['peso'])==false && empty($_POST['posicion'])==false && empty($_POST['equipo'])==false) {
      include 'jugador.php';
      $jugador=new Jugador();
      $resultado=$jugador->Insertarjugador($_POST["codigo"],  $_POST["nombre"], $_POST["procedencia"], $_POST["altura"], $_POST["peso"], $_POST["posicion"], $_POST["equipo"]);
      //VEMOS EL ULTIMO REGISTRO
      echo "<h3>ULTIMO REGISTRO:</h3>";
      $tablajug=$jugador->DevolverJugadorCodigo($_POST["codigo"]);
      foreach ($tablajug as $fila) {
        echo "Codigo: ".$fila['codigo']."<br>";
        echo "Nombre: ".$fila['Nombre']."<br>";
        echo "Procedencia: ".$fila['Procedencia']."<br>";
        echo "Altura: ".$fila['Altura']."<br>";
        echo "Peso: ".$fila['Peso']."<br>";
        echo "Posicion: ".$fila['Posicion']."<br>";
        echo "Equipo: ".$fila['Nombre_equipo']."<br>";
      }
//////EL ENLACE PARA ACTUALIZAR//////
      echo "<br>";
      echo "<a href='actualizarjugador.php?codigo=".$fila["codigo"]."&nombre=".$fila["Nombre"]."&procedencia=".$fila["Procedencia"]."&altura=".$fila["Altura"]."&peso=".$fila["Peso"]."&posicion=".$fila["Posicion"]."&equipo=".$fila["Nombre_equipo"]."'>Actualizar registro.</a>";

//////ENLACE PARA BORRAR//////
      echo "<br>";
      echo "<a href='listajugadores.php'>Borrar registro.</a>";
    }else {
      echo "<a href='insertarjugador.php'> Debes rellenar todos los campos </a>";
    }
     ?>
  </body>
</html>
