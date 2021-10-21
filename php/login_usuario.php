<?php



include 'conexion_be.php';

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$verificar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$usuario'
and contrasena='$contrasena'");

if (mysqli_num_rows($verificar_login)>0){

   
    echo'
    <script>
    
    
    window.location ="../index/index.html"
    </script>
    ';
    $verificar_login=null;
  mysql_close($conn);
    exit;
    
}else{

    echo'
    <script>
    
    alert("Usuario o contraseña erroneas, intente nuevamente");
    window.location ="../index.php"
    </script>
    ';
    $verificar_login=null;
    mysql_close($conn);
    exit;
    

}
$verificar_login=null;
mysql_close($conn);

?>