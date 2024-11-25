<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$query = "INSERT INTO usuarios (nombre, apellido, fechaNacimiento, email, contraseña) 
          VALUES ('$nombre', '$apellido', '$fechaNacimiento', '$email', '$contraseña')";

//VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");

if(mysqli_num_rows($verificar_email) > 0){
    echo '
    <script>
    alert("Este correo ya se encuentra registrado, intenta con otro diferente");
    window.location = "../index.php";
    </script>
    ';
    exit();

    
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../login.php";
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
