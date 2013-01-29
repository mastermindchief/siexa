<form method="post" action="/experia/creaUser.do" id="crearusuario_form">
	<fieldset>
		<h5>Creacion de usuarios.</h5>
		<hr />
		<div class="row">
			<div class="six columns">
				<label for="nombre" class="nombre">
					Nombres
					<span>Agregue nombre(s) del Usuario</span>
				</label>
				<input required="required" title="Agregue nombre completo del Usuario" type="text" name="nombre" id="nombre" />
			</div>
			<div class="six columns">
				<label for="priapellido" class="apellido">
					Apellidos
					<span>Agregue Apellido(s) del Usuario</span>
				</label>
				<input required="required" title="Digite Apellidos completos" type="text" name="apellidos" id="apellidos" />
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="six columns">
				<label for="tipo_id" class="tipo_id">
					Tipo Identificación
					<span>Elija el tipo de identificación</span>
				</label>
				<span></span>
				<select title="Elija tipo de identificación" name="tipo_id" id="tipo_id" >
					<option value="0">Seleccione ...</option>
					<option value="1">Tarjeta de Identidad</option>
					<option value="2">Cedula de Ciudadania</option>
					<option value="3">Cedula de extranjeria</option>
					<option value="4">Pasaporte</option>
				</select>
			</div>
			<div class="six columns">''
				<label for="identificacion" class="identificacion">
					Identificación
					<span>Agregue identificación del Usuario</span>
				</label>
				<input required="required" title="Digite numero de identificación" type="text" name="identificacion" id="identificacion" />
			</div>
			
		</div>
		<hr />
		<div class="row">
			<div class="four columns">
				<label for="direccion" class="direccion">
					Dirección
					<span>Digite dirección de Usuario</span>
				</label>
				<input required="required" title="Digite la direccion del Usuario" type="text" name="direccion" id="direccion" class="direccion"/>
			</div>
			<div class="four columns">
				<label for="telefono" class="telefono">
					Numero Telefónico
					<span>Agregue el numero teléfono</span>
				</label>
				<input required="required" title="Agregue el numero telefonico fijo" type="text" name="telefono" id="telefono" />
			</div>
			<div class="four columns">
				<label for="movil" class="movil">
					Numero Movil
					<span>Agregue el numero teléfono Movil</span>
				</label>
				<input required="required" title="Agregue el numero telefonico movil" type="text" name="movil" id="movil" />
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="four columns">
				<label for="fechaSolicitud" class="">
					Fecha Creacion
					<span>fecha de creación del usuario</span>
				</label>
				<input required="required" type="date" title="Seleccione la fecha de creacion de usuario" id="fechaSolicitud" name="fechaSolicitud" >
			</div>
			<div class="four columns">
				<label for="email" class="email">
					E-mail
					<span>Agregue un correo electronico válido</span>
				</label>
				<input required="required" title="Digite correo electronico del Usuario" type="text" name="email" id="email" />
			</div>
			<div class="four columns">
				<label for="rol">
					Tipo de Usuario
					<span>Seleccione un tipo de usuario</span>
				</label>
					<span></span>
					<select name="rol" id="rol" title="Seleccione el tipo de usuario a asignar">
						<option value="0">Seleccione...</option>
						<option value="2">Docente</option>
						<option value="3">Estudiante</option>
					</select>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="three columns">
				<label for="login">
					Nombre de Usuario 
					<span>Digite username</span>
				</label>
				<input type="text" placeholder="Digite el login " name="login" id="login"/>
			</div>
			<div class="three columns">
				<label for="passwd">
					Contraseña
					<span>Digite la contraseña</span>
				</label>
				<input type="password" placeholder="Digite password" name="passwd" id="passwd"/>
			</div>
			<div class="three columns">
				<label for="conpasswd">
					Confirmar Contraseña
					<span>Digite nuevamente la contraseña</span>
				</label>
				<input type="password" placeholder="Confirme password" name="conpasswd" id="conpasswd"/>
			</div>
			<div class="three columns">
				<label for="rol">
					Estado del Usuario
					<span>Seleccione estado del usuario</span>
				</label>
					<span></span>
					<select name="estado" id="estado" title="Seleccione estado del usuario a asignar">
						<option value="#">Seleccione...</option>
						<option value="1">Activo</option>
						<option value="0">inactivo</option>
					</select>
			</div>
		</div>
		<hr />
		<input type="submit" id="enviar" value="Enviar" class="nice small radius blue button"/>
	</fieldset>
</form>

