<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercico 3</title>
  </head>
  <body>

    <?php

    $array = array(1, 2, 3, 4,5,6,7,8,9,10);

    foreach ($array as $valor) {
echo "&nbsp (°-°)";
        $valor = ($valor );

    // $array ahora es array(2, 4, 6, 8)
    echo$valor; // rompe la referencia con el último elemento
}
    ?>

  </body>
</html>
