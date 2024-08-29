<?php
header("content-type: aplicacion/json")
$nombre= $_POST["nombre"];
$fecha=$_POST["fecha"];
$contenido=$_POST["contenido"];
$foto=$_POST["foto"];

$conexion=new mysqli("localhost","root","","proyecto1");
 
"INSERT INTO aericulos (nombre, fecha, contenido, foto, autor) VALUES ('$nombre','$fecha','$contenido','$foto',1)";

$conexiom->quey("INSERT INTO aericulos (nombre, fecha, contenido, foto, autor) VALUES ('$nombre','$fecha','$contenido','$foto',1)");
 $respuesta=[
    "respuesta"=> "ok"
 ];
 if ($respuesta->num_rows==0){
    $respuesta["repuesta"]="error";
 }
 echo json_encode($respuesta);
 