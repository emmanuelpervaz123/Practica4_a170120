<?php
  require_once "lib/nusoap.php";
 function getColores($datos) {
     if($datos =="Colores") {
         return join(",", array(
             "Rojo",
             "Azul",
             "Amarillo",
             "Rosa"));

         )
     }
     else{
         return "No hay Colores";
         
     }
 }
 $server = New soap_server();
 $server->register("getColores");
 if( !isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
  ?>