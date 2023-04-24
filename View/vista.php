<?php 

require_once("../Database/conexion.php");
require_once("../Controller/controlador.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street1Compton</title>
</head>
<body>
<?php
            foreach ($datos as $dato) {
                echo $dato['nombreUsuario'];
            }
        ?>

</body>
</html>