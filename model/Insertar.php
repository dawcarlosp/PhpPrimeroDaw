<?php
//credenciales
$server = 'localhost';
$user = "root";
$password = "toor";
$bbdd = 'ies';
$port = 3306;
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
//Datos Alumno
$codigoA = htmlspecialchars($_POST['codigo']);
$nombreA = htmlspecialchars($_POST['nombre']);
$apellidoA = htmlspecialchars($_POST['apellido']);
$nombreCompleto = $nombreA." ".$apellidoA;
$sexoA = htmlspecialchars($_POST['sexo']);
$edadA = htmlspecialchars($_POST['edad']);
$especialidadA = htmlspecialchars(($_POST['especialidad']));
//Mostrar los datos
echo $codigoA."<br>".$nombreCompleto."<br>".$sexoA."<br>".$edadA."<br>".$especialidadA."<br>";
//Conexion con control de errores
try{
    $db = new PDO('mysql:host=' . $server . ';dbname=' . $bbdd . ';port=' . $port, $user, $password, $opciones);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo 'Fallo la conexión: '.$e->getMessage();
}
$sql = "INSERT INTO alumnos(codigo,nombre,sexo,edad,especialidad) VALUES ('$codigoA','$nombreCompleto','$sexoA','$edadA','$especialidadA')";
$resultado=$db->exec($sql);
echo "Se han insertado ".$resultado." registros";
?>