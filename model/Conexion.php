<?php
class Conexion
{
    private $server;
    private $user;
    private $password;
    private $bbdd;
    private $port;
    private $opciones;
    public function __construct($serverP, $userP, $passwordP, $bbddP, $portP, $opcionesP)
    {
        $this->server = $serverP;
        $this->user = $userP;
        $this->password = $passwordP;
        $this->bbdd = $bbddP;
        $this->port = $portP;
        $this->opciones = $opcionesP;
    }
    public function getConexion()
    {
        try {
            $db = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->bbdd . ';port=' . $this->port, $this->user, $this->password, $this->opciones);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        return $db;
    }
    public function getFilas()
    {
         // Preparar consulta
    $stmt = $this->getConexion()->prepare("SELECT * FROM alumnos");
    $stmt->execute();

    $alumnos = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $alumnos[] = new Alumno($row['id'], $row['codigo'], $row['nombre'], $row['sexo'], $row['edad'], $row['especialidad']);
    }
        return $alumnos;
    }
}
