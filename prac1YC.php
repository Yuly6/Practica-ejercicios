<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>

<?php
    include 'funcionesYC.php'; // Incluir el archivo de funciones
?>
<?php
    // Pruebas con la función filtrar
    $array1 = [9, 8, 7, 6, 5, 4, 3];
    $array2 = [12, 31, 74, 19, -5];
    $array3 = [1, -97, 24, 35, 80];

    // Llamadas a la función
    $resultado1 = filtrar($array1); // Llamada con un solo parámetro (debería devolver [9, 7, 5, 3])
    $resultado2 = filtrar($array1, false); // Llamada con false (debería devolver [8, 6, 4])
    $resultado3 = filtrar($array2); // Llamada con un solo parámetro (debería devolver [12, 74, -5])
    $resultado4 = filtrar($array3, false); // Llamada con false (debería devolver [-97, 35])

    // Imprimir resultados Los arrays devueltos por la función filtrar se imprimen usando print_r para que puedas visualizar el resultado.
    print_r($resultado1);
    echo"<br>";
    print_r($resultado2);
    echo"<br>";
    print_r($resultado3);
    echo"<br>";
    print_r($resultado4);
    echo"<br>";
?> 
<?php
    echo sumarNegativos(7, -3, 7, -6, 6, -19);
    echo"<br>";
    echo sumarNegativos(7, 5, 7,8,2);
    echo"<br>";
?>
</body>
</html>