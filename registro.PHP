﻿<!doctype html>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
	
<meta name="viewport" content="width=device-width initial-scale=1.0, user-scalable=no">

<!--Celulares-->
<link href="phone4.css" rel="stylesheet" type="text/css" media="only screen and (min-width:240px) and (max-width:420px)">

<!--Tablet-->
<link href="tablet4.css" rel="stylesheet" type="text/css" media="only screen and (min-width:421px) and (max-width:1080px)">
	
<!--PC-->
<link href="pc4.css" rel="stylesheet" type="text/css" media="only screen and (min-width:1080px) and (max-width:5080px)">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Contacto</title>
<!-- InstanceEndEditable -->
<link rel="icon" href="logo.png">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="contenedor">
	
<header>
	<img id="img1"src="logo.png">
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: transparent"> 
	  
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> <img class="d-block mx-auto" src="1.jpg" alt="First slide">
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="carousel-item"> <img class="d-block mx-auto" src="2.jpg" alt="Second slide">
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="carousel-item"> <img class="d-block mx-auto" src="3.jpg" alt="Third slide">
        <div class="carousel-caption">
        
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</header>
	
<nav>

   <div id="titulo1"><a href="inicio.html">Inicio</a></div>
   <div id="titulo2"><a href="servicios.html">Servicios</a></div>
   <div id="titulo3"><a href="galeria.html">Galeria</a></div>
   <div id="titulo4"><a href="clientes.html">Clientes</a></div>
   <div id="titulo5"><a href="contacto.html">Contacto</a></div>

</nav>
	
	<section><!-- InstanceBeginEditable name="Editame" -->
	
<?php



	$servidor = "localhost";
	$usuario = "root";
	$contraseña = "";
	$bd = "creative";
	
	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bd)
		or die("Error con la conexion");
	
            	
	   	
	        $nombre = $_POST["txtnombre"];
	        $empresa = $_POST["txtempresa"];
	        $puesto = $_POST["txtpuesto"];
            $correo = $_POST["txtcorreo"];
            $telefono = $_POST["txttelefono"];
            $mensaje = $_POST["txtmensaje"];
            
           
	
        
           
	
	$insertar = "INSERT into registro VALUES ('$nombre','$empresa','$puesto','$correo','$telefono','$mensaje')";

	$resultado = mysqli_query($conexion, $insertar)
		or die ("Error al insertar registro");
		
	mysqli_close($conexion);

	   
	?>
<br><br><br><br><br><br><br><br><br><br>
<img src="registro.png">
<a href="contacto.html" target="_self">Regresar</a>
</section>

<footer>
	
	
		<div id="titulo8">
		Más información la puedes consultar aquí:
		</div>
	<div id="titulo9">
		Creative web | Agencia de Marketing Digital
		</div>
	
	<div id="titulo10">
		Creative Web te ofrece una verdadera estrategia digital para tu empresa. 
        <br>Somos una agencia SEO reconocida en el mundo del posicionamiento Web en México. 
		</div>
	
	<div id="titulo11">
		Contáctanos
		</div>
	
	<img id="img4"src="mapa.png">
	</div>
	
	<div id="titulo12">
		01 800 099 0361 
		
		<a href="http://www.facebook.com" target="_blank"><img id="img5"src="facebook.png"></a>
		<a href="http://www.twitter.com" target="_blank"><img id="img6"src="tw.png"></a>
		<a href="http://www.instagram.com" target="_blank"><img id="img7"src="insta.png"></a>
		
		
	
	</footer>	
</div>
	
	<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.0.0.js"></script>
</body>
<!-- InstanceEnd --></html>
