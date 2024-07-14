<?php
$servername = getenv('localhost');
$username = getenv('root');
$password = getenv('');
$dbname = getenv('HelloWorld');

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conectado exitosamente a la base de datos.<br>";
echo "Hola Mundo!";
?>
