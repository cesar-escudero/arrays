<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>

    <?php

  $n[0]  = "mirna";
  $n[1]  = "paula";
  $n[2] = "maira";
  $n[3]  = "jose";
  $n[4]  = "sebastian";
  $n[5] = "carlos";


echo "Personas En Lista <hr>";

echo  $personas = count($n),"<br>";


shuffle($n);
foreach ($n as $r) {

  echo $r,"<br>";
  # code...
}


?>
  </body>
</html>
