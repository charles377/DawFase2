<?php

include 'conexion_be.php';

$nombre_completo= $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(Nombre, Email, usuario, contrasena) 

VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";

$verificar_email = mysqli_query($conn, "SELECT * FROM usuarios WHERE Email='$correo'");

if(mysqli_num_rows($verificar_email) > 0 ){
    echo'
    <script>
    
    alert("Este correo ya esta registrado intenta con otro");
    window.location ="../index.php";
    </script>
    ';
    $verificar_login=null;
    mysql_close($conn);
    exit;
    }


    $verificar_usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo'
    <script>
    
    alert("Este usuario ya esta registrado intenta con otro");
    window.location ="../index.php";
    </script>
    ';
    $verificar_login=null;
    mysql_close($conn);
    exit;
    }


$execute = mysqli_query($conn, $query);

if($execute){
echo'
<script>

alert("Usuario almacenado exitosamente");
window.location ="../index.php";
</script>
';
$verificar_login=null;
mysql_close($conn);
}else{
    echo'
    <script>
    
    alert("Error, usuario no almacenado, intentalo nuevamente");
    window.location ="../index.php";
    </script>
    ';
$verificar_login=null;
}
$verificar_login=null;
mysql_close($conn);

?>