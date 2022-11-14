<?php

// Creamos el array de temperaturas.
$temperaturas = array("Enero" => '12.1', "Febrero" => '13', "Marzo" => '17.4',
    "Abril" => '19', "Mayo" => '25', "Junio" => '31', "Julio" => '34.7',
    "Agosto" => '34', "Septiembre" => '28', "Octubre" => '23',
    "Noviembre" => '16', "Diciembre" => '13');

echo 'Gráficos Temperaturas Mensuales';
// El texto tendrá el estilo requerido para mostrarse correctamente.
echo '<div style="font-family: monospace; font-size: 40px">';
echo '<br>';
//Creamos un foreach para que muestra cuadrados por cada mes.
foreach ($temperaturas as $mes => $grados) {
    print_r(str_pad($mes, 15, '-') . '>');
// Mostraremos tantos cuadrados por la temperatura que tenga.
    for ($i = 0; $i < $grados; $i++) {
// Mostramos el cuadrado.
        echo'<img src = "imagenes/barraTemp.PNG" style="border: 1px solid black"/>';
    }

    // Hacemos un bucle para poner los $decimales.
    $decimales = $grados - floor($grados);

    for ($e = 0; $e < $decimales; $e += 0.1){
        echo'<img src = "imagenes/barraTemp.PNG" style="border: 1px solid black" width="15px"/>';
    }
        echo ' ' . $grados . 'ºC';
    echo '<br>';
}
echo '</div>';
