<?php 
header("Access-Control-Allow-Origin:*");
header("Credentials: true");
header("Methods: PUT,POST,DELETE,GET");
define("URL_BASE","/alumno/3817/app-estacion/api2/");
$request = explode("/", str_replace(URL_BASE,"",$_SERVER["REQUEST_URI"]));
$request = array_filter($request);
$modelo="";
if(!count($request)){
	echo json_encode(array("en"=>404,"error"=>"falta modelo"));
}else{
	$modelo=ucfirst(strtolower($request[0]));
	if(!file_exists("../models/".$modelo.".php")){
		
			echo json_encode(array("en"=>404,"error"=>"no existe modelo"));
	}else{
		if (!isset($request[1])) {
			echo json_encode(array("en"=>404,"error"=>"no puso metodo"));
		}else{
			include "../models/".$modelo.".php";
			$metodo = $request[1];

			/* Analizar */
			if(!method_exists(strtolower($modelo),$metodo)){
				echo json_encode(array("en"=>404,"error"=>"no existe metodo dentro de la clase"));
			}else{

				$obj= new $modelo;

				if (isset($request[2])) {
					$parameter1=$request[2];			
				}
				if(empty($parameter1)){
					  $body= $obj -> $metodo();
				}else{

					if(isset($request[3])){
						 $parameter2=$request[3];	
					}
					if(empty($parameter2)){
					     $body= $obj -> $metodo($parameter1);
					}else{
						 $body= $obj -> $metodo($parameter1,$parameter2);	
					}


				}
			}
		}
	}

	
}
	echo json_encode($body);
	
 ?>