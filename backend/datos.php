<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$peticion = $_GET['variable'];

if($peticion == 'euro' || $peticion == 'dolar'){
    include_once 'conexion.php';
    $sql = 'SELECT * FROM '. $peticion;
    $sent_buscar = $pdo->prepare($sql);
    $sent_buscar->execute();
    $resultados = $sent_buscar->fetchAll();
}else{
    echo 'Solicitud no encontrada';
}

echo json_encode($resultados);