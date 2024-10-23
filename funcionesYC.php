<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   // Función filtrar
    function filtrar($array, $bool = true) {
        $resultado = [];
    
        // Recorremos el array
        foreach ($array as $indice => $valor) {
            // Si el boolean es true, obtenemos las posiciones pares (índices 0, 2, 4, etc.)
            // Si el boolean es false, obtenemos las posiciones impares (índices 1, 3, 5, etc.)
            if ($bool) {
                if ($indice % 2 == 0) {
                    $resultado[] = $valor;
                }
            } else {
                if ($indice % 2 != 0) {
                    $resultado[] = $valor;
                }
            }
        }
    
        // Devolvemos el array resultante
        return $resultado;
    }
    function sumarNegativos(){
        // Obtener los parámetros pasados a la función
        $numeros = func_get_args();
        $suma = 0;
    
         // Verificar si hay parámetros
        if (count ($numeros) === 0){
            return 0; // Devolver 0 si no hay parámetros
        }else{
            foreach ($numeros as $numbers){
                if ($numbers < 0){
                    $suma += $numbers;  
                }
            }
            return $suma;
        }
    }
    ?>

    <?php
   /**
 * Función que busca un producto en las tiendas
 * @param string $productoBuscado Nombre del producto que el usuario quiere encontrar
 * @return array Retorna un array de resultados con tiendas que venden el producto
 */
function buscarProducto($productoBuscado) {
    // Array de tiendas con productos, nombres y direcciones
    $tiendas = [
        ["nombre" => "Tienda Latina", "producto" => "Arepas", "direccion" => "Calle 123, Ciudad A"],
        ["nombre" => "Mercado Latino", "producto" => "Yerba Mate", "direccion" => "Avenida 456, Ciudad B"],
        ["nombre" => "Delicias Latinas", "producto" => "Tamal", "direccion" => "Plaza 789, Ciudad A"],
        ["nombre" => "Tienda Latina", "producto" => "Dulce de Leche", "direccion" => "Calle 123, Ciudad A"],
        ["nombre" => "Mercado Latino", "producto" => "Arepas", "direccion" => "Avenida 456, Ciudad B"],
        ["nombre" => "Delicias Latinas", "producto" => "Yerba Mate", "direccion" => "Plaza 789, Ciudad A"]
    ];

    $resultados = [];

    // Buscar tiendas que vendan el producto buscado (sin importar mayúsculas o minúsculas)
    foreach ($tiendas as $tienda) {
        if (stripos($tienda['producto'], $productoBuscado) !== false) {
            $resultados[] = $tienda;
        }
    }

    return $resultados;
}

?>
<?php
/**
 * Función que muestra los resultados de búsqueda en una tabla
 * @param array $resultados Array con las tiendas que venden el producto
 */
function mostrarResultados($resultados) {
    echo "<table>";
    echo "<tr><th>Producto</th><th>Tienda</th><th>Dirección</th></tr>";

    foreach ($resultados as $resultado) {
        echo "<tr>
                <td>{$resultado['producto']}</td>
                <td>{$resultado['nombre']}</td>
                <td>{$resultado['direccion']}</td>
              </tr>";
    }

    echo "</table>";
}
?>
    ?>
</body>
</html>