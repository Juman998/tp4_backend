<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp1</title>
  </head>
  <body>
    <h1>Ejercicios del TP3</h1><br><hr>
    <h2>Ejercicio 1</h2>
    <h3>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
    <?php
    $i = 0;
    while ($i < 20) {
      $i++;
      $i++;
      $array[] = $i;
    }
    foreach ($array as $item) {
      echo $item . "<br />";
    }
    ?>

    <h2>Ejercicio 2</h2>
    <h3>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r(). </h3>
    <?php
    $array = ["Pedro", "Ana", "34", "1"];
    print_r($array)
     ?>

    <h2>Ejercicio 3</h2>
    <h3>Crear un array asociativo e introducir los valores dados</h3>
    <?php
        $array=[
          'Nombre'=>"Pedro",
          'Apellido'=> "Torres",
          'Direccion'=>"Av. Mayor 3703",
          'Telefono'=>1122334455,
        ]
      ?>

    <h2>Ejercicio 4</h2>
    <h3>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.  Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid. </h3>
    <?php
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    foreach ($ciudades as $indice=> $nombre) {
      print "La ciudad con el índice $indice tiene el nombre $nombre.\n";
    }
     ?>

    <h2>Ejercicio 5</h2>
    <h3>Mostrar las suma de los numeros del 1 al 20</h3>



  </body>
</html>
