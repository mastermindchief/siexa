
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(unescape('../view/javascripts/jquery.js"%3E%3C/script%3E'))</script>
		<script src="../javascripts/jquery.js"></script>
		<script type="text/javascript">		
		$(document).ready(function(){
			   $("#tipo_est").click(function(evento){
			      if ($("#tipo_est").val()==2){
			    	  $("#ti").hide();
			      }else{
			         $("#ti").show();
			      }
			   });
			});
		</script>
<form action="/experia/consultUser.do"  method="post" >
	<fieldset>
		<h5>Consulta de usuarios.</h5>
		<hr />
		<div class="row">
			<div class="six columns">
				<label for="tipo_est" class="tipo_est">
					Tipo Busqueda
					<span>Elija el tipo de Busqueda a realizar</span>
				</label>
				<span></span>
				<select title="Elija tipo de identificación" name="tipo_est" id="tipo_est" >
					<option value="0">Seleccione ...</option>
					<option value="1">Buscar todos</option>
					<option value="2">Docente</option>
					<option value="3">Estudiante</option>
				</select>
			</div>
			<div class="six columns">
				<label for="tipo_id" class="tipo_id">
					Tipo Identificación
					<span>Elija el tipo de Identificación</span>
				</label>
				<span></span>
				<select title="Elija tipo de identificación" name="tipo_id" id="tipo_id" >
					<option value="0">Seleccione ...</option>
					<option value="1">Buscar todos</option>
					<option id="ti" value="2">Tarjeta de Identidad</option>
					<option value="3">Cedula de Ciudadania</option>
					<option value="4">Cedula de extranjeria</option>
					<option value="5">Pasaporte</option>
				</select>
			</div>
		</div>
		<hr />
		div.row>div.six.columns>label
		<hr />
		<input type="submit" id="searchConsulta" value="buscar" class="nice small radius blue button"/>
		<input type="submit" id="limpiar" value="limpiar" class="nice small radius blue button"/>
		<input type="submit" id="cancelar" value="calncelar" class="nice small radius blue button"/>
		<div id="gridConsulta">
		</div>
	</fieldset>
</form>

    
    