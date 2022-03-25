<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/practica4/cliente.php");

$error = $cliente->getError();
if($error){
    echo "<h2>constructor error</h2><pre>". $error . "</pre>";
}
$result = $cliente->call("getColores", array("datos" => "Colores"));
if ($cliente -> fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else{
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Colores</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>