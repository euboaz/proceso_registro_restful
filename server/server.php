<?php

require_once 'conexion.php';

$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'PUT':
        registro_usuario();
        break;
    default:
        ejecutar_default();
        break;
}
function registro_usuario()
{
    header("HTTP/1.1 200 Sucessful");
    $cn = new conexion();
    $cn->conectar();
    $correo = $_REQUEST['correo'];
    $pass = $_REQUEST['pass'];
    $sql = "INSERT INTO usuarios (email,pass) VALUES ('$correo','$pass')";
    $rs = $cn->ejecutarConsulta($sql);
    $cn->desconectar();
}
function ejecutar_default()
{
    header("HTTP/1.1 405 Method not allowed");
}
