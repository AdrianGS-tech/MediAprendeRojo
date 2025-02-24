<?php
// Datos de conexión a la base de datos
$host = "localhost"; 
$usuario = "root"; 
$contrasena = "Tecnologico05"; 
$nombre_bd = "mediaprende"; 

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $nombre_bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa";
}

// Aquí puedes realizar consultas y operaciones en la base de datos utilizando $conexion

// Cerrar conexión
$conexion->close();
?>
