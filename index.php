<?php 

	require_once "./config/APP.php";
	require_once "./controlador/vistasControlador.php";

	$plantilla = new vistasControlador();
	$plantilla->obtener_plantilla_controlador();

?>