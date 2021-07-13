<?php

class DB{

    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct(){
        $this->host = "localhost";
        $this->db = "grafica";
        $this->user = "root";
        $this->password = "";   
    }

    public function connection(){
        $conexion = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if(!$conexion){
            return die('Error en la conexión: '.mysqli_connect_errno());
        }
        else{
            return $conexion;
        }
    }
}

?>