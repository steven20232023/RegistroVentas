<?php

require('Model/bd_sql.php');

$conexion= new Conection();

$url = $_SERVER["REQUEST_URI"];
//$_SERVER["HTTP_HOST"]

if(strpos($url, "Qhali") != false){

    $listpedidos = $conexion->getPedido();
    require('View/pedido.php');
}
