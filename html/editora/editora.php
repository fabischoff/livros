<?php session_start() ?>

<?php

if (array_key_exists('editora', $_GET) && $_GET['editora'] != '') {

    $editora = [];

    $editora['editora'] = $_GET['editora'];

    $_SESSION['lista_editora'][] = $editora;
}

$lista_editora = [];

if (array_key_exists('lista_editora', $_SESSION)) {
    $lista_editora = $_SESSION['lista_editora'];
}

require '../editora/form_editora.php';



//intranet 993126584 intranet gilson