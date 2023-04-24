<?php 
    class Conexion  {
    public function conexionBdaPhp(){
        $server = 'localhost';
        $user= 'root';
        $password = '';
        $database = 'StreetCompton';
        $conectar = mysqli_connect($server,$user,$password,$database) or die("Error en la conexion");
        return $conectar;
    }

    }
?>