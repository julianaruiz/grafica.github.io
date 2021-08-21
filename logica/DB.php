<?php

class DB{

    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct(){
        $this->host = "localhost";
        $this->db = "id17331860_grafica";
        $this->user = "id17331860_root";
        $this->password = "Valeoz-1001015552";   
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