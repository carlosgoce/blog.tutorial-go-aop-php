<?php

require_once __DIR__ . '\..\vendor\autoload.php';

$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(array(
    'debug' => true, // En producción cambiar a "falso"
    'cacheDir' => __DIR__ . './cache/',
    // Incluir las rutas en las que queremos que el AspectKernel realice su magia
    // Dejar vacío para que afecte a todo nuestro proyecto
    'includePaths' => array(
        __DIR__ . '/../src/'
    )
));


$cliente = new Cliente();
$cliente->comprar("Libro");
