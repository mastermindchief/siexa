<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Bienvenido a SIEXA</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="app/view/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="app/view/stylesheets/app.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script>window.jQuery || document.write(unescape('%3Cscript src="../../javascripts/jquery.js"%3E%3C/script%3E'))</script>
  
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>

  <!-- container -->
	<div class="container">
		<div class="row">
			<div class="eight columns centered ">
				<hr />
				<img src="app/view/images/imagesIA/headerimg.png" alt="Exper-IA" />
				<hr />
			</div>
		</div>
		<div class="row">
			<div class="six columns centered">
				<div class="panel">
					<form action="app/controller/procesaLogin.php" method="post" >
							<h5>Iniciar Sesion.</h5>
							<span>Inicio de sesion en Siexa</span>
							<hr />
							<div class="row">
								<div class="seven columns centered">
									<label for="login"> Nombre de Usuario </label> <input 
										required="required" placeholder="Digite  Nombre de Usuario"
										type="text" name="login" id="login" class="nice medium radius" />
								</div>
							</div>
							<div class="row">
								<div class="seven columns centered">
									<label for="passwd">Contraseña</label> <span></span> 
									<input	required="required" type="password"	placeholder="Digite su Contraseña" name="passwd" id="passwd" class="medium" />
								</div>
							</div>
							<div class="row">
								<div class="six columns centered">
									<hr />
									<input type="submit" class="nice small radius button" value="acceder" />
								</div>
							</div>
							<hr />
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- container -->
  
  
  <!-- Included JS Files (Uncompressed) -->
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
 
  
  <!-- Included JS Files (Compressed) -->
  <script src="app/view/javascripts/jquery.js"></script>
  <script src="app/view/javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="app/view/javascripts/app.js"></script>
</body>
</html>
