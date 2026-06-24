<?php
include("conexion_AgendaPersonal.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$direccion2 = $_POST['direccion2'];
$correo = $_POST['correo'];
$nombre_artistico = $_POST['nombre_artistico'];

$sql = "INSERT INTO agenda 
(nombre, apellido, direccion, telefono, celular, direccion2, correo, nombre_artistico)
VALUES 
('$nombre', '$apellido', '$direccion', '$telefono', '$celular', '$direccion2', '$correo', '$nombre_artistico')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>