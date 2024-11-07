<?php

    require_once '../src/models/Usuarios.php';

    class UsuariosController{

        public function ObtenerTodos(){
            $modeloUsuario = new Usuarios();
            echo json_encode(value: ["Resultado" =>   $modeloUsuario->getAll()]);
        }

        public function ObtenerPorId($id){
            $modeloUsuario = new Usuarios();
            echo json_encode(value: ["Resultado" =>   $modeloUsuario->getById($id)]);
        }
    }
?>