<?php 
error_reporting(1);
class MYSQLBD
{
    private $host = '127.0.0.1';
    private $usuario = 'unicuc';
    private $password = '123456789';
    private $bd = 'unicuc';

    public function __construct(){}
    public function connectBD(){
        $conexion = new mysqli($this->host,$this->usuario,$this->password,$this->bd);
        if($conexion->connect_error)
            die("Connection Failed:".$conexion->connect_error);
        return $conexion;
    }
}





?>