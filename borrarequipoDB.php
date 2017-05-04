<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BORRAR UN EQUIPO (ENTRADA)</title>
  </head>
  <body>

    <?php
//////INCLUIR CONEXION//////
      include 'equipo.php';
      $equipo=new equipo();

      $borrar=$equipo->BorrarEquipo($_GET["nombre"]);

      if ($borrar==true) {
       ?>

       <p>Se ha borrado con exito</p>
       <a href="index.php">Volver a inicio</a>
       <a href="listaequipos.php"> Borrar otro registro</a>

       <?php
      }else {
        ?>
        <a href="listaequipos.php">No se ha podido borrar.</a>
        
        <?php
      }
     ?>
  </body>
</html>
