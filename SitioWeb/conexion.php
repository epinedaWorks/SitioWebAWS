<?php
  // Información de conexión a la base de datos
  $servername = "servidorbd.cul1rokptvup.us-west-1.rds.amazonaws.com";
  $username = "admin";
  $password = "Erick$19";
  $dbname = "epinedaPodcast";

  // Establecer la conexión
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Verificar la conexión
  if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
  }

  echo "Conexión exitosa";
?>