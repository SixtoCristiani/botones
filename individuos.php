<!DOCTYPE HTML>

<?php	
	$codigoDM = 1352279;	
	$show = true;	
	$tipo = $_GET['tipo'];		
	$sede = $_GET['sede'];	
	$mes = $_GET['mes'];	
	$anio = $_GET['anio'];	
	$nombre = $_GET['nombre'];
	$casas = $_GET['casas'];
	$codigoFAM = $sede.' '.$mes.' '.$anio.' '.$tipo.' '.$casas.' '.$nombre;
	
	$descripcionTipo['FAM'] = 'Familia';	
	$descripcionTipo['GRU'] = 'Grupo';	
	$descripcionTipo['STA'] = 'Staff';
	
	$descripcionTipo2['FAM'] = 'Familias';	
	$descripcionTipo2['GRU'] = 'Grupo de Amigos';	
	$descripcionTipo2['STA'] = 'Staff';
	
	$descripcionTipo3['FAM'] = 'familia';	
	$descripcionTipo3['GRU'] = 'grupo de amigos';	
	$descripcionTipo3['STA'] = 'staff';
	
	$descripcionTipo4['FAM'] = 'la familia';	
	$descripcionTipo4['GRU'] = 'el grupo';	
	$descripcionTipo4['STA'] = 'el staff';
	
 	$descripcionSede['BA'] = 'Buenos Aires';	
	$descripcionSede['BAN'] = 'BA Sede Norte';	
	$descripcionSede['BAO'] = 'BA Sede Oeste';	
	$descripcionSede['BAS'] = 'BA Sede Sur';	
	$descripcionSede['LP'] = 'La Plata';	
	$descripcionSede['ON'] = 'Oficina Nacional';	
	$descripcionSede['MIS-OBE'] = 'Oberá';	
	$descripcionSede['MIS-POS'] = 'Posadas';	
	$descripcionSede['NQN-RN'] = 'Neuquén - Río Negro';	
	$descripcionSede['COCHA'] = 'Corrientes - Chaco';	
	$descripcionSede['TUC'] = 'Tucumán';	
	$descripcionSede['CBA'] = 'Córdoba';	
	$descripcionSede['SAL'] = 'Salta';	
	$descripcionSede['ROS'] = 'Rosario';
	
	if ($tipo == 'FAM' || $tipo=='GRU' || $tipo=='STA')	
	{		
		$montos['BA'] = '24000.00';		
		$montos['BAN'] = '24000.00';		
		$montos['BAO'] = '24000.00';		
		$montos['BAS'] = '24000.00';		
		$montos['LP'] = '24000.00';		
		$montos['ON'] = '24000.00';		
		$montos['MIS-OBE'] = '24000.00';		
		$montos['MIS-POS'] = '24000.00';		
		$montos['NQN-RN'] = '24000.00';		
		$montos['COCHA'] = '24000.00';		
		$montos['TUC'] = '24000.00';		
		$montos['CBA'] = '24000.00';		
		$montos['SAL'] = '24000.00';		
		$montos['ROS'] = '24000.00';
		
		$mail['BA'] = 'familias.buenosaires@techo.org';		
		$mail['BAN'] = 'familias.buenosaires@techo.org';		
		$mail['BAO'] = 'familias.buenosaires@techo.org';		
		$mail['BAS'] = 'familias.buenosaires@techo.org';		
		$mail['LP'] = 'familias.laplata@techo.org';		
		$mail['ON'] = 'familias.argentina@techo.org';		
		$mail['CBA'] = 'familias.cordoba@techo.org';		
		$mail['NQN-RN'] = 'familias.neuquen@techo.org';		
		$mail['SAL'] = 'familias.salta@techo.org';		
		$mail['MIS-OBE'] = 'familias.argentina@techo.org';		
		$mail['MIS-POS'] = 'familias.argentina@techo.org';		
		$mail['COCHA'] = 'familias.argentina@techo.org';		
		$mail['TUC'] = 'familias.argentina@techo.org';		
		$mail['ROS'] = 'familias.argentina@techo.org';
	}
?>
	
<html>
	<head>
		<title>TECHO - Botón de Pago</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->	
		<link rel="shortcut icon" type="images/x-icon" href="/images/favicon.png" />	
		<link rel="icon" href="images/favicon.png" type="images/x-icon">
	</head>
	<body id="top">		
		<header id="header">			
			<div class="content">
				<h2>
					<?php if ($tipo == 'GRU' || $tipo == 'STA')
					{					
						echo "Te damos la bienvenida al botón de pago<br/> de TECHO del <b>$descripcionTipo[$tipo] $nombre</b>";
					} 				
					else
					{					
						echo "Te damos la bienvenida al botón de pago<br/> de TECHO de la <b>$descripcionTipo[$tipo] $nombre</b>";
					}?>
				</h2>				
				<ul class="actions">					
				<li><a href="#one" class="button icon fa-chevron-down scrolly">Más Información</a></li>					
				<li><a href="#two" class="button icon fa-chevron-down scrolly">Ir a Pagar</a></li>									
				</ul>			
			</div>			
			<div class="image phone"><div class="inner"><img src="images/logo5.png" alt=""/></div></div>		
		</header>		
		<section id="one" class="wrapper style2 special">			
			<header class="major">	
				<h3>Programa de Construcción con <?php echo $descripcionTipo2[$tipo]?></h3><br/>
				<h4>				
					<ul>La construcción con tu <?php echo $descripcionTipo3[$tipo]?> es una oportunidad de voluntariado que permite vivir una experiencia única y muy enriquecedora.<br/> El grupo, que idealmente se conforma entre 6 y 12 personas, tiene la posibilidad de participar y construir una vivienda de emergencia<br/> en conjunto con una familia que hoy se encuentra viviendo en situación de extrema pobreza y vulnerabilidad.</ul>			
					<ul>La actividad transcurre durante un fin de semana completo y no ​está limitada a la edad ni a las habilidades en construcción de sus voluntarios.<br/> La experiencia se basa en las ganas de compartir, conocer y transformar juntos esta realidad en la que viven más de 800.000 familias del país.</ul>			
					<ul>Desde TECHO proveemos todo lo necesario para que el grupo se encuentre debidamente acompañado por voluntarios de la organización.<br/> Nos encargamos del trabajo previo en el barrio, el proceso de encuestamiento y selección de las familias, la logística previa<br/> y durante la construcción, de proveer las herramientas y brindar el soporte que sea necesario para así llevar a cabo una gran construcción.</ul>
					<ul>Por último, <?php echo $descripcionTipo4[$tipo]?> se compromete a financiar en modo de donación el valor total de la vivienda a construir depositando o<br/> transfiriendo ARS $ <?php echo $montos[$sede] * $casas?> (<a href="https://sites.google.com/a/techo.org/veni-a-construir/techo-instructivo-pago-familias" target='_blank'><u>Ver Instructivo</u></a>), como así también llevar la comida para compartir el fin de semana con la familia.</ul>
					<ul>Para más información o cualquier inquietud que tengas, podés escribirnos a <b><?php echo $mail[$sede]?></b></ul>
				</h4>			
			</header>					
		</section>		
		<section id="two" class="wrapper style3 special">			
			<header class="major">				
				<img src="images/logo4.png" alt="construi con tu donación"/>
				<br/>
				<form id="formulario" action="https://gateway.payulatam.com/ppp-web-gateway" method="post">											
					<ul>						
						<h4>Nombre y Apellido:</h4>						
						<input type="text" id="buyerFullName" name="buyerFullName" required />						
						<br/>						
						<h4>Email:</h4>						
						<input type="email" id="buyerEmail" name="buyerEmail" required />						
						<br/>						
						<h4>DNI / Pasaporte:</h4>						
						<input type="text" id="payerDocument" name="payerDocument" onkeypress="return valida(event)" required />						
						<br/>						
						<h4>Monto a Pagar:</h4>						
						<input type="text" id="item_ammount_1" name="item_ammount_1" value="" onKeyPress="return SoloNumerico(event, this);" Onblur="AplicoFormato(this)" required />																												
						<br/>											
						<input type="hidden" id="amount" name="amount" value=""/>						
						<input type="hidden" id="extra1" name="extra1" value=""/>						
						<input type="hidden" id="merchantId" name="merchantId" value="536715"/>						
						<input type="hidden" id="referenceCode" name="referenceCode" value="CC-Familias"/>						
						<input type="hidden" id="accountId" name="accountId" value="538721"/>						
						<input type="hidden" id="description" name="description" value="<?php echo $codigoFAM; ?>"/>						
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
			<p class="copyright">&copy; Techo Argentina. Credits: Santi Mello</p>		
		</footer>		
		<script src="assets/js/md5.js"></script>		
		<script src="assets/js/index.js"></script>		
		<script src="assets/js/documento.js"></script>		
		<script src="assets/js/jquery.min.js"></script>		
		<script src="assets/js/jquery.scrolly.min.js"></script>		
		<script src="assets/js/skel.min.js"></script>		
		<script src="assets/js/util.js"></script>		
		<script src="assets/js/main.js"></script>	
	</body>
</html>