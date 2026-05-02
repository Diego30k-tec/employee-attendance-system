<?php
//Llamamos a los datos de los archivos config/confing.php y model
// DIR es direccion del archivo que ocupas por ejemplo
//localhost/proyecto/app/
require_once__DIR__.''/../config/config.php;
require_once__DIR__.''/../models/Login.php;
Class LoginController{
    public function login(): void{
        //variable que te va servir, si algun error exista.
        $error = null;
        //datos del Formulario del Login
        if (_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario =trim($_POST['user'] ?? '');
            $clave =trim($_POST['pass'] ?? '');

            if(empty($usuario) || empty($clave)){
                $error = "Completa todos  campos, porfavor.";
            }else{
                //Llamamos al objeto del modelo/LOGIN
                $LoginUsuario (new Login())-> login($usuario,$calve);
            }
        }
    }
}