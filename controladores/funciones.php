<?php
//Este archivo representa el conjunto de funciones que controlaran toda la lógica de nuestra propuesta, y de esa forma no la disponemos en nuestras páginas donde tenemos las vistas al usuario.
function validar($datos){
    //Este representa mi array donde voy a ir almacenando los errores, que luego muestro en la vista al usuario.|
    $errores = [];

    $nombre = trim($datos['nombre']);
    if(empty($nombre )){
        $errores['nombre']="El campo nombre no puede quedar en blanco..";
    }

    $apellido = trim($datos['apellido']);
    if(empty($apellido )){
        $errores['apellido']="El campo apellido no puede quedar en blanco..";
    }
    
    
    $email = trim($datos['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errores['email']="Email inválido...";
    }

    $userName = trim($datos['usuario']);
    if(empty($userName )){
        $errores['usuario']="El campo Usuario no puede quedar en blanco..";
    }

    $password = trim($datos['password']);
    if(empty($password)){
        $errores['password']="El password no puede ser blanco...";
    }elseif (!is_numeric($password)) {
        $errores['password']="El password debe ser numérico...";
    }elseif (strlen($password)<6) {
        $errores['password']="El password como mínimo debe tener 6 caracteres...";
    }
    $passwordRepeat = trim($datos['passwordRepeat']);
    if($password != $passwordRepeat){
        $errores['passwordRepeat']="Las contraseñas deben ser iguales";
    }
        
    
    
    return $errores;   
}

function armarRegistro($datos){
    $usuarios =[
        "nombre" => $datos["nombre"],
        "apellido" => $datos["apellido"],
        "email" => $datos["email"],
        "usuario" => $datos["usuario"],
        "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
        "role" => 1,        
    ];
    return $usuarios;
}

function guardarRegistro($registro){
    $archivoJson = json_encode($registro);
    file_put_contents("usuarios.json",$archivoJson.PHP_EOL, FILE_APPEND);
}
