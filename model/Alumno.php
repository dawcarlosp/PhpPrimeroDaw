<?php
include 'Conexion.php';
class Alumno
{
    // Atributos
    public $id;
    public $codigo;
    public $nombre;
    public $sexo;
    public $edad;
    public $especialidad;

    // Constructor
    public function __construct($id, $codigo, $nombre, $sexo, $edad, $especialidad)
    {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->sexo = $sexo;
        $this->edad = $edad;
        $this->especialidad = $especialidad;
    }

    // Métodos getters y setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getEspecialidad()
    {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
    public static function getAlumnos()
    {
        //Parametros
        $server = 'localhost';
        $user = "root";
        $password = "toor";
        $bbdd = 'ies';
        $port = 3306;
        $opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
        $con = new Conexion($server,$user,$password,$bbdd,$port,$opciones);
        return $con->getFilas();
    }
    /*
    public static function getAlumnos(){
       global $alumnos;
       return $alumnos;
    }
    */
}
