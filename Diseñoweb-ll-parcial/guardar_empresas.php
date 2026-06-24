<?php
include("conexion_empresas.php");

$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO empresas(nombre, producto, telefono, correo, direccion)
VALUES ('$nombre', '$producto', '$telefono', '$correo', '$direccion')";

if(mysqli_query($conn, $sql)){

    echo "
    <script>
        alert('Datos guardados correctamente');
        window.location='empresas.html';
    </script>
    ";

}else{

    echo "Error: " . mysqli_error($conn);

}
?>