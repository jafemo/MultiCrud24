<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BORRAR UN JUGAOR</title>
  </head>
  <body>
    <?php
//////INCLUIR CONEXION//////
      include 'jugador.php';
      $jugador=new jugador();
      $borrar=$jugador->Borrarjugador($_GET["codigo"]);
      if ($borrar==true) {
       ?>

       <p>Se ha borrado el jugador</p>
       <a href="index.php">Volver a inicio</a>
       <a href="listajugadores.php"> Borrar otro registro</a>

       <?php
      }else {
        ?>

        <a href="listajugadores.php">No ha sido posible borrarse</a>
        
        <?php
      }
     ?>
  </body>
</html>
