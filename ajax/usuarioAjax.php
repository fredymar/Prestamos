<?php
    $peticionAjax = true;
    require_once "../config/APP.php";

    if (false) {
        /*---------- Instancia al controlador -------------*/
        require_once "../controlador/usuarioControlador.php";
        $ins_usuario = new usuarioControlador();
    } else {
        session_start(['name' => 'SPM']);
        session_unset();
        session_destroy();
        header("location: ".SERVERURL."login/");
    }
    