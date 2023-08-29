<?php

    define("BASE_URL", "http://localhost/PROYECTO_CREAJ/");
    class Conexion{
        public function conectarse(){
            $user="root";
            $pass="";
            $host="localhost";
            $db="PROYECTO_CREAJ";
            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $pass);
            return $conexion;
        }
    }

?>