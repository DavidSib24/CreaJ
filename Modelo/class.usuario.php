<?php

class Usuarios{

    public function registro($nombre,$apellido,$correo,$contrasena){
        try{
            $modelo = new Conexion();
            $db = $modelo -> conectarse();
            $stmt = $db->prepare("SELECT Id_Usuario FROM usuarios WHERE Nombre = :nombre AND Apellido = :apellido");
            $stmt->bindParam("nombre", $nombre,PDO::PARAM_STR);
            $stmt->bindParam("apellido", $apellido,PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();

            if($count<1){
                $st = $db->prepare("INSERT INTO usuarios(Nombre, Apellido, Correo, Contrasena) VALUES (:nombre, :apellido, :correo, :contra_hash)");
                $st->bindParam("nombre",$nombre,PDO::PARAM_STR);
                $st->bindParam("apellido",$apellido,PDO::PARAM_STR);
                $st->bindParam("correo",$correo,PDO::PARAM_STR);
                $contra_hash = hash('sha256',$contrasena);
                $st->bindParam("contra_hash",$contra_hash,PDO::PARAM_STR);
                $st->execute();
                $db = null;
                return true;
            }else{
                $db = null;
            }
            
            return false;
        }catch(PDOException $e){
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }

    }

    public function login($username, $contrasena){
        try{
            $modelo = new Conexion();
            $db = $modelo -> conectarse();
            $contra_hash = hash('sha256', $contrasena);
            $stmt = $db->prepare("SELECT Id_Usuario FROM usuarios WHERE (Nombre = :nombre OR Correo = :correo) AND Contrasena = :contra_hash");
            $stmt->bindParam("nombre",$username,PDO::PARAM_STR);
            $stmt->bindParam("correo",$username,PDO::PARAM_STR);
            $stmt->bindParam("contra_hash",$contra_hash,PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch();
            $db = null;

            if($count){
                $_SESSION['Id_Usuario'] = $data['Id_Usuario'];
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
    }

}

?>