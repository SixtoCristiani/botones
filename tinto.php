<!DOCTYPE HTML>

<?php
	$codigoDM = 4083795;
	$show = true;
	$tipo = $_GET['tipo'];
	$numero =$_GET['numero'];
	$sede = $_GET['sede'];
	$orden = $_GET['orden'];
	$mes = $_GET['mes'];
	$anio = $_GET['anio'];
	$codigoCC = $tipo.' '.$numero.' '.$sede.' '.$orden.' '.$mes.' '.$anio;
?>

<html>	<head>		<title>Tinto for TECHO - Pago</title>
  	<link rel="shortcut icon" type="images/x-icon" href="/images/favicon.png"/>
		<link rel="icon" href="images/favicon.png" type="images/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css"/>
	</head>
	<body id="top">
		<div class='header' style="background-image: url('images/tinto.jpg');
			background-repeat: no-repeat;
			background-position: center;
			height: 300px;">

		</div>
		<section id="three" class="wrapper style3 special">
			<header class="major" >
				<h2>Abonar los cubiertos</h2>
				<form id="formulario" action="https://gateway.payulatam.com/ppp-web-gateway" method="post">
					<ul>
						<h4>Cantidad de Cubiertos </h4>
						<select id="cantidadCubiertos" onchange="updateTotal()" placeholder="hL" name="cantidadCubiertos">
								<option value="1">1</option>
						  	<option value="2">2</option>
						  	<option value="3">3</option>
						  	<option value="4">4</option>
						  	<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
						</select>
						<h5>Total: <i id="montoTotal" value="5000">5000</i>$
						</h5>
						<br/>
						<h4>Nombre y Apellido:</h4>
						<input type='text' id='buyerFullName' name='buyerFullName' required/>
						<input type='hidden' id='payerFullName' >
						<br/>
						<h4>Mail:</h4>
						<input type='email' id='buyerEmail' name='buyerEmail' required/>
						<br/>


						<input type="hidden" id="item_ammount_1"value="5000"/>
						<input type="hidden" id="amount" name="amount" value=""/>
						<input type="hidden" id="merchantId" name="merchantId" value="536715"/>
						<input type="hidden" id="referenceCode" name="referenceCode" value="TINTO 2018-"/>
						<input type="hidden" id="accountId" name="accountId" value="538721"/>
						<input type="hidden" id="description" name="description" value="Tinto por Techo" />

						<input type="hidden" id="extra1" value="" />
	 				  <input type="hidden" id="payerDocument" name="payerDocument" value="x"/>
						<input type="hidden" id="tax" name="tax" value="0"/>
						<input type="hidden" id="taxReturnBase" name="taxReturnBase" value="0"/>
						<input type="hidden" id="signature" name="signature" value=""/>
						<input type="hidden" id="currency" name="currency" value="ARS"/>
						<button type="button" onclick="enviar()" id="boton-donar" value="Pagar">Pagar</button>
					</ul>
				</form>
				</header>
		</section>
		<footer id="footer">
			<ul class="icons">
				<li><a href="https://www.facebook.com/TECHOargentina" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
				<li><a href="https://twitter.com/TECHOarg" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
				<li><a href="https://www.instagram.com/techo_argentina/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
				<li><a href="https://www.linkedin.com/company/2634308?trk=tyah" class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
				<li><a href="https://www.youtube.com/user/techoargentina" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
			</ul>
			<p class="copyright">&copy; Techo Argentina</p>
		</footer>
		<script src="assets/js/md5.js"></script>
		<script src="assets/js/index_tinto.js"></script>
		<script src="assets/js/documento.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
