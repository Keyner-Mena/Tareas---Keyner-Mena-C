<?php

// ENDPOINT PRINCIPAL: http://localhost/tareas---keyner-mena-c/Practica-2/public/index.php/usuarios
// ENDPOINT CON UN PARÁMETRO: http://localhost/tareas---keyner-mena-c/Practica-2/public/index.php/usuarios?id=12

// Lógica de la API

$method = $_SERVER['REQUEST_METHOD'];

// Remueve "/" del inicio
$path = trim($_SERVER['PATH_INFO'], '/');

// Divide la ruta por "/" para obtener el endpoint y el posible parámetro
$segments = explode('/', $path);

// Captura la cadena de consulta completa después del "?" (por ejemplo: "id=123&nombre=juan")
$queryString = $_SERVER['QUERY_STRING'];

// Parseamos la cadena de consulta a un arreglo asociativo
parse_str($queryString, $queryParams);

// Extraemos los parámetros de la consulta
$id = isset($queryParams['id']) ? $queryParams['id'] : null;
if ($path == "usuarios") {
    switch ($method) {
        case 'GET':
            if ($id != "") {
                echo ('El ID de usuario es ' . $id);
            } else {
                echo ('Lista de todos los usuarios');
            }
            break;
        default:
            echo "Método no permitido";
    }
} else {
    include "error/response.html";
}

?>