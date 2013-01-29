<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title>..:: SIEXA - Administrador ::..</title>

<!-- Included CSS Files -->
<link rel="stylesheet" href="../view/stylesheets/foundation.min.css">
<link rel="stylesheet" href="../view/stylesheets/app.css">
<link rel="stylesheet" href="../view/stylesheets/formsSiexa.css">
<link rel="shortcut icon" href="../view/images/favicon.ico">
<!--[if lt IE 9]>
		<link rel="stylesheet" href="app/view/stylesheets/ie.css">
	<![endif]-->

<!--<script src="../../javascripts/modernizr.foundation.js"></script>-->

<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script>window.jQuery || document.write(unescape('%3Cscript src="../../javascripts/jquery.js"%3E%3C/script%3E'))</script>
		<script type="text/javascript">		
			$(document).ready(function(){ // Script del Navegador
				$("ul.subnavegador").hide();				
				$("ul.subnavegador").parent().addClass('desplegable');
				$("ul.navegador li.desplegable a").toggle(
					function() { 
						$(this).parent().find("ul.subnavegador").slideDown('normal'); 
					},
					function() { 
						$(this).parent().find("ul.subnavegador").slideUp('normal'); 
					}				
				);	
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#cargar_crear').click(function() {
					$.ajax({
						url : '../view/forms/administrador/Form_CrearUsuario.php',
						success : function(data) {
							$('#div_dinamico').html(data);
							$('#div_dinamico').slideDown('fast');
						}
					});
				});
			});
			$(document).ready(function() {
				$('#cargar_consultar').click(function() {
					$.ajax({
						url : '../view/forms/administrador/Form_ConsultaUsuario.php',
						success : function(data) {
							$('#div_dinamico').html(data);
							$('#div_dinamico').slideDown('fast');
						}
					});
				});
			});
			$(document).ready(function() {
				$('#cargar_modificar').click(function() {
					$.ajax({
						url : '../view/forms/administrador/Form_ModificaUsuario.php',
						success : function(data) {
							$('#div_dinamico').html(data);
							$('#div_dinamico').slideDown('fast');
						}
					});
				});
			});
		</script>

</head>
<body>

	<!-- container -->
	<div class="container">
		<div class="row">
			<div class="twelve columns ">
				<hr />
				<img  src="../view/images/imagesIA/headerMenu.png" alt="siexa" />
				<hr />
			</div>
			<div class="row">
				<div class="three columns">
					<div class="panel">
						<ul class="navegador">
							<li><a href="#" title="Gestion de Usuarios">Gestion de Usuarios</a>
								<ul class="subnavegador">
									<li><a id="cargar_crear" href="#" title="Crear Usuario">Crear </a></li>
									<li><a id="cargar_consultar" href="#" title="Consultar Usuario">Consultar </a></li>
									<li><a id="cargar_modificar" href="#" title="Modificar Usuario">Modificar </a></li>
									<li><a id="cargar_eliminar" href="#" title="Eliminar Usuario">Eliminar </a></li>
								</ul>
							</li>
							<li><a href="#" title="Gestion de Cursos">Gestion de Cursos</a>
								<ul class="subnavegador">
									<li><a href="#" title="">algo aqui cursos</a></li>
									<li><a href="#" title="">algo aqui cursos</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="nine columns" >
					<div class="panel" id="div_dinamico">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- container -->
	<!-- Included JS Files -->
	<!-- Included JS Files (Uncompressed) -->
<!--
  
  <script src="../../javascripts/jquery.js"></script>
  
  <script src="../../javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="../../javascripts/jquery.foundation.forms.js"></script>
  
  <script src="../../javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="../../javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="../../javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="../../javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="../../javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="../../javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="../../javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="../../javascripts/jquery.placeholder.js"></script>
  
  <script src="../../javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="../../javascripts/jquery.foundation.topbar.js"></script>
  
  
  <!-- Included JS Files (Compressed) -->
	<script src="../view/javascripts/jquery.js"></script>
	<script src="../view/javascripts/foundation.min.js"></script>
	<script src="../view/javascripts/app.js"></script>
	<script src="../view/javascripts/modernizr.foundation.js"></script>

</body>
</html>

    