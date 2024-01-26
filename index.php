<?php 

//use app\Models\databse;

require_once 'vendor/autoload.php';
require_once 'app/Models/databse.php';
require_once 'app/Models/products.php';

////// esto debe ir antes que anda para cargar las variables globales
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// $conexion = new databse();
// $conn = $conexion->conexion();


// $resultado =  $conn->query("SELECT nombre,apellido FROM usuarios");

// // Comprobar los resultados
// if ($resultado) {
//     // Obtener el registro
//     $registro = $resultado->fetch_assoc();

//     // Imprimir el nombre del usuario
//     echo $registro['nombre'];
//     echo $registro['apellido'];
// } else {
//     echo 'No se encontraron resultados';
// }

// // Cerrar la conexión
// $conn->close();

//echo products:: createProduts('doritos','hojuelas de maiz en forma de triangulo cubiertas por una fina capa de queso',1);
//products::getProductsAll(2);
//products::deleteProducts(2);
// echo products::UpdateProducts(1,'Es una hojuela de maiz frita bañada en una capa fina de queso en polvo',3);
/////echo products::UpdateProducts(2,'Producto 1',1);
?>