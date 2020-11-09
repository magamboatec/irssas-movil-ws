<?php
$conexion = mysqli_init();
if (!$conexion) {
  die("mysqli_init failed");
}

$conexion -> ssl_set("client-key.pem", "client-cert.pem", "server-ca.pem", NULL, NULL);

if (!$conexion -> real_connect("34.72.46.112","nodejs","WDsdp4iYkW5c5dF ","asadas","3306",NULL,MYSQLI_CLIENT_SSL)) {
  die("Connect Error: " . mysqli_connect_error());
}


$conexion -> close();
?> 