<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "login_registro_db";

// Conectarse a la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conectado correctamente a la base de datos";
?>
