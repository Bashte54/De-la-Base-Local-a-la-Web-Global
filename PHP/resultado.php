<?php 
include 'head2.html';
//rescibiendo datos desde index.php con el metodo post
$nombre = $_POST['nombre'];
$edad  = $_POST['edad'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//usando los metodos recibidos  
echo "<p>mi nombre es: $nombre</p>";
echo "<p>mi edad es: $edad</p>";
echo "<p>mi correo es: $correo</p>";
echo "<p>mi contraseña es: $contrasena</p>";
echo "<a href = 'Index.php'> Back </a>"; // boton para regresar
?>