<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$query = "INSERT INTO usuarios (nombre, apellido, fechaNacimiento, email, contraseña) 
          VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$email', '$contraseña')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
    </script>
    ';
}else{
    echo '
        <script>
            alert("Inténtelo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close($conexion);

?>
