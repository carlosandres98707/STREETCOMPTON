<?php 
require_once("../Model/modelo.php");
$consulta = new Consultas();
$datos = $consulta->getUsuarios();

require_once("../View/vista.php");
?>