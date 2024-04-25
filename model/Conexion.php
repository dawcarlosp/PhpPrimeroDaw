<?php
//credenciales
$server = 'localhost';
$user = "root";
$password = "toor";
$bbdd = 'ies';
$port = 3306;
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];

//Conexión mediante PDO
//Conexión con control de errores
try {
    $db = new PDO('mysql:host=' . $server . ';dbname=' . $bbdd . ';port=' . $port, $user, $password, $opciones);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Preparar consulta
    $stmt = $db->prepare("SELECT * FROM alumnos");
    $stmt->execute();

    $alumnos = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $alumnos[] = new Alumno($row['id'], $row['codigo'], $row['nombre'], $row['sexo'], $row['edad'], $row['especialidad']);
    }
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
?>
