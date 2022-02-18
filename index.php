<?php


// CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

$rutaBase = 'archivos/';

$ficheros = scandir($rutaBase);

print_r( json_encode($ficheros));

