<?php
    include "../RECU/ELE/BD.php";

    if (isset($_POST['subir'])) {

	$nombre = $_POST['nombre'];
	$marca = $_POST['marca'];
	$fecha = $_POST['fecha'];
	$precio = $_POST['precio'];
    $descuento = $_POST['descuento'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $categoria= $_POST['categoria'];
    $genero = $_POST['genero'];
    $estado = $_POST['estado'];
    
    $con->query("UPDATE  articulo  SET  fecha ='$fecha', nombre ='$nombre', marca ='$marca', precio ='$precio', descuento ='$descuento', descripcion ='$descripcion', cat_id ='$categoria', ge_id ='$genero', estado ='$estado', cantidad ='$cantidad' WHERE art_id='$id'");
    echo "<p>Actualizacion completa</p>";
    }
?>