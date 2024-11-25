<?php

include  'conexion_be.php';

$email = $_POST ['email'];
$contraseña = $_POST ['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
email='$email' and contraseña='$contraseña'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../bienvenida.php");
    exit;
}else{
    echo '
    <script>
    alert("Usuario no existe, por favor verifique los datos introducidos");
    window.location = "../login.php";
    </script>
 
';
exit;
}

?>