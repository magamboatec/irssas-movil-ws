<?php
include 'conexion.php';
$usu_usuario=$_POST['user'];
$usu_password=$_POST['password'];

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE USUARIO=? AND Contrasenna=?");
$sentencia->bind_param('ss',$usu_usuario,$usu_password);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
}
$sentencia->close();
$conexion->close();
?>