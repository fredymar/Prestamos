<?php

	require_once "./modelo/vistasModelo.php";
	
	class vistasControlador extends vistasModelo{

		/*---------------Controlador Obtener Plantilla--------------*/
		public function obtener_plantilla_controlador(){
			return require_once "./vistas/plantilla.php";
		}

		/*---------------Controlador Obtener Vistas--------------*/
		public function obtener_vistas_controlador(){

			if (isset($_GET['views'])) {
				$ruta = explode("/", $_GET['views']);
				$respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);
			} else {
				$respuesta = "login";
			}

			return $respuesta;
			
		}

	}
?>