<?php 

//use app\Models\databse;

require_once 'vendor/autoload.php';
require_once 'app/Models/databse.php';

////// esto debe ir antes que anda para cargar las variables globales
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conexion = new databse();
$conn = $conexion->conexion();


$resultado =  $conn->query("SELECT nombre,apellido FROM usuarios");

// Comprobar los resultados
if ($resultado) {
    // Obtener el registro
    $registro = $resultado->fetch_assoc();

    // Imprimir el nombre del usuario
    echo $registro['nombre'];
    echo $registro['apellido'];
} else {
    echo 'No se encontraron resultados';
}

// Cerrar la conexión
$conn->close();
?>