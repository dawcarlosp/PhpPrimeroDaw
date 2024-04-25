<?php
class Conexion{
    private $server;
    private $user;
    private $password;
    private $bbdd;
    private $port;
    private $opciones;
    public function getConexion(){
        $db = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->bbdd . ';port=' . $this->port, $this->user, $this->password, $this->opciones);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
?>