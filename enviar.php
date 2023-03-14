<link rel="stylesheet" href="./Css/estilos.css">

<?php
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $color = $_POST['color'];
    $sneaker = $_POST['sneaker'];
    $deportivo = $_POST['deportivo'];
    $zapato = $_POST['zapato'];
    $tacos = $_POST['tacos'];
    $zapatilla = $_POST['zapatilla'];
    $botas = $_POST['botas'];
    $chanclas = $_POST['chanclas'];
    $talla = $_POST['talla'];
    $marca = $_POST['marca'];
    $fecha = $_POST['fecha'];
    $txtEdad = $_POST['txtEdad'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Almacen</title>
        
</head>
<body>
    <h1> REGISTRO.</h1>
    <p>Codigo: <?php echo $codigo;?></p>
    <p>Nombre: <?php echo $nombre;?></p>
    <p>Color: <?php echo $color;?></p>
    <p>Sneaker: <?php echo $sneaker;?></p>
    <p>Deportivo: <?php echo $deportivo;?></p>
    <p>Zapato: <?php echo $zapato;?></p>
    <p>Tacos: <?php echo $tacos;?></p>
    <p>Zapatilla: <?php echo $zapatilla;?></p>
    <p>Botas: <?php echo $botas;?></p>
    <p>Chanclas: <?php echo $chanclas;?></p>
    <p>Talla: <?php echo $talla;?></p>
    <p>Marca: <?php echo $marca;?></p>
    <p>Fecha: <?php echo $fecha;?></p>
    <p>Edad <?php echo $txtEdad;?></p><br><br><br>
    
    <button class="boton1"><a href="index.html"><span>Volver</span></a></button>
</body>
</html>
