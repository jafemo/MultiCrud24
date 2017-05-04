<?php

include 'db.php';
class equipo extends db{
  function __construct(){
    parent::__construct();
  }
//////INSERTAR UN EQUIPO//////
  public function Insertarequipo($nombre, $ciudad, $conferencia, $division){
    $sql="INSERT INTO equipos(Nombre, Ciudad, Conferencia, Division) VALUES ('".$nombre."', '".$ciudad ."', '" .$conferencia ."', '" .$division ."')";
    $insertequipo=$this->realizarInsert($sql);
    if ($insertequipo=!false) {
      return true;
    }else {
      return false;
    }
  }

//////FUNCION PARA DEVOLVER EQUIPOS A TRAVÉS DE UN SELECT//////
public function DevolverEquipoNombre($nombre){
  $sql="SELECT * FROM equipos WHERE Nombre='" .$nombre ."'";
  $devolverEquipo=$this->realizarConsulta($sql);
  if($devolverEquipo!=null){
    //REALIZAMOS LA TABLA RESULTADOS
    $tablaequipo=[];
    while($fila=$devolverEquipo->fetch_assoc()){
      $tablaequipo[]=$fila;
    }
    return $tablaequipo;
  }else{
    return null;
  }
}

//////FUNCION PARA LISTAR LOS EQUIPOS//////
public function ListaEquipos(){
  $sql="SELECT * FROM equipos";
  $listaequipos=$this->realizarConsulta($sql);
  if ($listaequipos!=null) {
    $tablalista=[];
    while ($fila=$listaequipos->fetch_assoc()) {
      $tablalista[]=$fila;
    }
    return $tablalista;
  }else {
    return null;
  }
}

//////FUNCION PARA ACTUALIZAR EQUIPOS DE LA BASE DE DATOS//////
public function ActualizarEquipo($nombre, $ciudad, $conferencia, $division)
{
  $sql="UPDATE equipos SET Nombre='" .$nombre ."', Ciudad='" .$ciudad ."', Conferencia='" .$conferencia ."', Division='" .$division ."' WHERE Nombre='" .$nombre ."'";
  $actualizarequipo=$this->realizarActualizacion($sql);
  if ($actualizarequipo=!false) {
    return true;
  }else {
    return false;
  }
}

//////FUNCION PARA BORRAR UN EQUIPO DE LA BASE DE DATOS//////
public function Borrarequipo($nombre){
  $sql="DELETE FROM equipos WHERE Nombre='".$nombre ."'";
  $borrarequipo=$this->realizarBorrado($sql);
  if ($borrarequipo=!false) {
    return true;
  }else {
    return false;
  }
}
}



?>
