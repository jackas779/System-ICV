<?php 
//namespace Models;

class databse {
  private  $username ;
  private  $contrasena ;
  private  $servername ;
  private  $database ;
  private  $puerto = "1433";
  public  $conexion ;

  function __construct()
  {
    $this->username = $_ENV['DB_USERNAME'];
    $this->contrasena = $_ENV['DB_PASSWORD'];
    $this->servername = $_ENV['DB_HOST'];
    $this->database = $_ENV['DB_NAME'];
    $this->conexion();
  }

  function conexion() {
    $this->conexion = mysqli_init();
    $this->conexion->ssl_set(NULL, NULL, "cacert.pem", NULL, NULL);
    $this->conexion->real_connect($this->servername,$this->username ,$this->contrasena ,$this->database);
    if ($this->conexion->connect_error) {
      return die("Error de conexión: " . $this->conexion->connect_error);
    } else {
      return $this->conexion;
    }
  }
}


?>