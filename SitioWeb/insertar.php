<?php
  // Establecer la conexión con la base de datos
  include "conexion.php";

  // Tomar los datos del formulario
  $nombre = $_POST['nombre'];
  $comentario = $_POST['comentario'];
  $fecha = $_POST['fecha'];

  // Insertar los datos en la tabla "Publicacion"
  $sql = "INSERT INTO epinedaPodcast.Publicacion (nombre, comentario, fecha) VALUES ('$nombre', '$comentario', '$fecha')";

  if (mysqli_query($conn, $sql)) {
    echo "La publicación se ha guardado correctamente.";
  } else {
    echo "Error al guardar la publicación: " . mysqli_error($conn);
  }

  // Cerrar la conexión
  mysqli_close($conn);
?>