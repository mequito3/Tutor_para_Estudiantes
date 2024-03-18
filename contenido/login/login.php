<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario de inicio de sesión</title>
  <!-- Incluye los archivos necesarios de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Incluye el archivo CSS personalizado -->
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<!-- Crea el contenedor principal -->
	<div class="container-fluid">
	  <!-- Crea una fila centrada verticalmente -->
	  <div class="row justify-content-center align-items-center" style="height:100vh;">
		<!-- Crea una columna que ocupe 4/12 del ancho en pantallas grandes y todo el ancho en pantallas pequeñas -->
		<div class="col-lg-4 col-md-6 col-sm-12">
			<img src="favicon.PNG" alt="Imagen de ejemplo" class="img-fluid">
		  <!-- Crea un formulario de inicio de sesión con Bootstrap -->
		  <form class="form-signin">
			<h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
			<label for="inputEmail" class="sr-only">Correo electrónico</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
			<label for="inputPassword" class="sr-only">Contraseña</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
			<div class="checkbox mb-3">
			  <label>
				<input type="checkbox" value="remember-me"> Recordar usuario
			  </label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
			<p class="mt-3 text-center">¿No tienes una cuenta? <a href="registroEstudiante.php">Regístrate Aqui</a></p>

		  </form>
		</div>
	  </div>
	</div>
  </body>
</html>
<style>/* Hace que el formulario ocupe todo el alto y ancho de la pantalla */
	html,
	body,
	.container-fluid,
	.row {
	  height: 100%;
	}
	
	/* Centra verticalmente el contenido del formulario */
	.form-signin {
	  height: 100%;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	}
</style>