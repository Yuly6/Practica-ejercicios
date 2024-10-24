$libros = [
    'libro1' => [
        'titulo' => 'la mala costumbre',
        'autoria' => 'alana s. portero',
        'ano' => 2023
    ],
    'libro2' => [
        'titulo' => 'lo que hay',
        'autoria' => 'sara torres',
        'ano' => 2022
    ],
    'libro3' => [
        'titulo' => 'las malas',
        'autoria' => 'camila sosa villada',
        'ano' => 2019
    ]
];

// Función para formatear cadenas de texto
function formatear($cadena, $todasPalabras = false) {
    if ($todasPalabras) {
        return ucwords($cadena); // Primera letra de cada palabra en mayúscula
    } else {
        return ucfirst($cadena); // Solo la primera letra de la cadena en mayúscula
    }
}

// Función para calcular la antigüedad
function antiguedad($ano, $anoComparacion = null) {
    $anoActual = date('Y'); // Año actual
    if ($anoComparacion) {
        return $anoComparacion - $ano;
    }
    return $anoActual - $ano;
}

// Array con la clave 'páginas' añadida a ciertos libros
$librosConPaginas = [
    'libro1' => [
        'titulo' => 'la mala costumbre',
        'autoria' => 'alana s. portero',
        'ano' => 2023,
        'paginas' => 304
    ],
    'libro2' => [
        'titulo' => 'lo que hay',
        'autoria' => 'sara torres',
        'ano' => 2022
    ],
    'libro3' => [
        'titulo' => 'las malas',
        'autoria' => 'camila sosa villada',
        'ano' => 2019,
        'paginas' => 240
    ]
];

?>
Archivo prac1XY.php:
php
Copiar código
<?php
include 'funciones/biblioteca.php';

echo "<table border='1'>
<tr>
    <th>Título</th>
    <th>Autoría</th>
    <th>Años desde publicación</th>
    <th>Número de páginas</th>
</tr>";

foreach ($librosConPaginas as $libro) {
    echo "<tr>";
    echo "<td>" . formatear($libro['titulo']) . "</td>";
    echo "<td>" . formatear($libro['autoria'], true) . "</td>";
    echo "<td>" . antiguedad($libro['ano']) . "</td>";
    echo "<td>" . (isset($libro['paginas']) ? $libro['paginas'] : 'No definido') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>