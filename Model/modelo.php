<?php
include_once("../Database/conexion.php");


 class Consultas  {
   private $servicio;
   
    public function __construct(){
        $this->servicio = array();
      
    }

    public function getUsuarios(){
        $conectar = new Conexion();
        $conectado = $conectar->conexionBdaPhp();
   
        $consultar = 'Select * from usuarios';
        $resultado = mysqli_query($conectado,$consultar);
    

    while ($res = $consulta = mysqli_fetch_assoc($resultado)) {
        $this->servicio[] = $res;
    }
    return  $this->servicio;    
    }

   
 }
 
?>