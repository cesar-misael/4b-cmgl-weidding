<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost;port=3037;dbname=4b-aws-wedding", "soporte4baws", "soporte4baws");
    
            $link->exec("set names utf8");
    
            return $link;
        }
    }
    
?>