<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR JUGADOR</title>
  </head>
  <body>
    <?php
    if (empty($_POST['codigo'])==false && empty($_POST['nombre'])==false && empty($_POST['procedencia'])==false &&
        empty($_POST['altura'])==false && empty($_POST['peso'])==false && empty($_POST['posicion'])==false && empty($_POST['equipo'])==false) {
      include 'jugador.php';
      $jugador=new jugador();

//////METEMOS LA FUNCION DE ACTUALIZAR JUGADOR//////
      $actualizarjug=$jugador->ActualizarJugador($_POST["codigo"],  $_POST["nombre"], $_POST["procedencia"], $_POST["altura"], $_POST["peso"], $_POST["posicion"], $_POST["equipo"]);

//////DEVOLVEMOS EL USUARIO ACTUALIZADO//////
      if ($actualizarjug==true) {
        tablajug=$jugador->DevolverJugadorCodigo($_POST["codigo"]);
        foreach ($tablajug as $fila) {
          echo "Codigo: ".$fila['codigo']."<br>";
          echo "Nombre: ".$fila['Nombre']."<br>";
          echo "Procedencia: ".$fila['Procedencia']."<br>";
          echo "Altura: ".$fila['Altura']."<br>";
          echo "Peso: ".$fila['Peso']."<br>";
          echo "Posicion: ".$fila['Posicion']."<br>";
          echo "Equipo: ".$fila['Nombre_equipo']."<br>";
        }
        echo "<br>";
        echo "<a href='actualizarjugador.php?codigo=".$fila["codigo"]."&nombre=".$fila["Nombre"]."&procedencia=".$fila["Procedencia"]."&altura=".$fila["Altura"]."&peso=".$fila["Peso"]."&posicion=".$fila["Posicion"]."&equipo=".$fila["Nombre_equipo"]."'>Actualizar registro.</a>";
//////ENLACE PARA BORRAR REGISTRO//////
        echo "<br>";
        echo "<a href='listajugadores.php'>Borrar registro.</a>";
      }else {
        echo "Error en la actualizacion";
      }
    ?>
  </body>
</html>
