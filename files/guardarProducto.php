<?php
include("../clases/conexion.php");

$nombreProducto = $_POST["nombreProducto"];
$precioProducto = $_POST["precio"];
$imagenProducto = '';

$db = new Conexion();

$db->beginTransaction();

$sql = $db->prepare("INSERT INTO productos (nombre_producto, precio, imagen)
	VALUES (:nombreProducto, :precioProducto, :imagenProducto)");

$sql->bindParam(':nombreProducto', $nombreProducto, PDO::PARAM_STR);
$sql->bindParam(':precioProducto', $precioProducto, PDO::PARAM_INT);
$sql->bindParam(':imagenProducto', $imagenProducto, PDO::PARAM_STR);


$sql->execute();

if($sql){
    echo "Los datos se guardaron correctamente";
    $db->commit();
}
else{
    echo "Ocurrio un error";
    $db->rollbak();
}
?>
