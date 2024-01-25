<?php 

class products {

    public static function getProductsAll($limit = 10){
        $database = new databse;
        $conn = $database->conexion();

        $sql= $conn->prepare("SELECT * FROM productos LIMIT ? ");
        $sql->bind_param('i',$limit);
        $sql->execute();
        if($sql){
            $result = $sql->get_result();
            while ($row = $result->fetch_assoc()) {
                echo "el producto es : ". $row['producto'] . " y su descripcion es : " . $row['descripcion'] . "<br>";
            }
        }else{
            return "No hay resultados";
        }
        $sql->close();
    }
    public static function createProduts($prod,$desc,$user){
        $database = new databse;
        $conn = $database->conexion();
        $usern = $conn->prepare("SELECT nombre,username FROM usuarios  WHERE idusuarios = ?");
        $usern->bind_param('i',$user);
        $usern->execute();
        $result =$usern->get_result();
        if($result->num_rows > 0){

            $row = $result->fetch_assoc();
            $username= $row['username'];

            $sql= $conn->prepare("INSERT INTO productos (producto,descripcion,user_crea) VALUES(?,?,?)");
            $sql->bind_param('ssi',$prod,$desc,$user);
            $sql->execute();
            if($sql->affected_rows == 1){
                return "se creo correctamente el producto : ". $prod . " <br> con la siguiente descripcion: " . $desc . "<br> el usuario responsable fue :" . $username;
            }else{
                $error = mysqli_error($conn);
                return "No se pudo crear el producto comuniquese con su administrador $error ";
            }
        }else{
            return "El usuario no existe";
        }
        $conn->close();
    }
    public static function deleteProducts(?int $id_prod){
        $database = new databse;
        $conn = $database->conexion();
        if($id_prod !== null){
            $conn->query("DELETE FROM productos WHERE prod_id = $id_prod ");
            if($conn){
                if($conn->affected_rows == 1){
                    return "Se elimino correctamente el producto";
                }else{
                    $error = mysqli_error($conn);
                    return "No se pudo eliminar el producto por que no existe $error ";
                }
            }else{
                return "No se pudo eliminar el producto por que no existe";
            }
        }else{
            return "No selecciono ningun producto a eliminar";
        }
        $conn->close();
    }
}

?>