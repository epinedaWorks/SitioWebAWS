<?php
  // Establecer la conexión con la base de datos
  include "conexion.php";

  // Tomar la fecha del formulario de consulta
  $fecha_consulta = $_POST['fecha_consulta'];

  // Consultar los datos de la tabla "Publicacion" que tienen una fecha igual o posterior a la fecha ingresada
  $sql = "SELECT id, nombre, comentario, fecha FROM epinedaPodcast.Publicacion WHERE fecha >= '$fecha_consulta' ORDER BY fecha DESC";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Mostrar los datos en una tabla
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Comentario</th><th>Fecha</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["comentario"] . "</td><td>" . $row["fecha"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No se encontraron publicaciones para la fecha seleccionada.";
  }

  // Cerrar la conexión
  mysqli_close($conn);
?>