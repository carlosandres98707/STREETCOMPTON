

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Street Compton</title>
</head>
<body>
    
    <H1>Street Compton</H1>
    <?php
    include_once("Database/conexion.php");
    $conectar = new Conexion();
    $conectado = $conectar->conexionBdaPhp();


    $mostrar ='SELECT * from usuarios';
    $resultado = mysqli_query($conectado,$mostrar);

    $consulta = mysqli_fetch_array($resultado);

    ?>
    <h1><?php echo $consulta['idUsuario'] ?></h1><br>
    
    <h1><?php echo $consulta['nombreUsuario'] ?></h1><br>
    
    <h1><?php echo $consulta['edadUsuario'] ?></h1><br>
 

</body>
</html>