<?php session_start()?>

<?php

if (array_key_exists('autor', $_GET) && $_GET['autor'] != '')  {
    
    $autor = [];

    $autor['autor'] = $_GET['autor'];
    
    $_SESSION['lista_autor'][] = $autor;
}

$lista_autor = [];

if (array_key_exists('lista_autor', $_SESSION)) {
    $lista_autor = $_SESSION['lista_autor'];
}

require './.../html/autor/form_autor.php';