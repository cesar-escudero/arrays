<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercico 1</title>
  </head>
  <body>

    <?php


  $info = array('pedro torres', 'calle 20', '113911328');

  // Enumerar todas las variables
  list($nombre, $direccion, $tel) = $info;

  echo "<h4>El senor $nombre vive en la $direccion  y su numero de telefono es $tel </h4>";

    ?>

  </body>
</html>
