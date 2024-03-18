<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tutor App</title>
	<link rel="stylesheet" href="ruta/a/bootstrap.min.css" />
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
	<header class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<h1>Registrar Estudiante</h1>
					<p>Un ejemplo de cómo registrar un estudiante totalmente responsive utilizando HTML, CSS y Bootstrap.</p>
				</div>
				<a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img class="img-thumbnail bg-transparent invertir" src="favicon.PNG" 
            alt="Bootstrap logo"/>
        </a>
			</div>
		</div>
	</header>


	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="container py-5">
					<div class="row justify-content-center">
						<div class="col-md-8">
							<form>

								<div class="mb-3">
									<label for="nombre" class="form-label">Nombres *</label>
									<input type="text" class="form-control" id="nombre" required>
								</div>
								<div class="mb-3">
									<label for="apellido-paterno" class="form-label">Apellido paterno *</label>
									<input type="text" class="form-control" id="apellido-paterno" required>
								</div>

								<div class="mb-3">
									<label for="apellido-materno" class="form-label">Apellido materno *</label>
									<input type="text" class="form-control" id="apellido-materno" required>
								</div>

								<div class="mb-3">
									<label for="email" class="form-label">Email *</label>
									<input type="email" class="form-control" id="email" required>
								</div>

								<div class="mb-3">
									<label for="usuario" class="form-label">Nombre de usuario *</label>
									<input type="text" class="form-control" id="usuario" required>
								</div>

								<div class="mb-3">
									<label for="inputPassword" class="form-label">Contraseña</label>
									<input type="password" class="form-control" id="inputPassword" required>
								</div>

								<div class="col-md-6 mb-3">
									<label for="inputConfirmPassword" class="form-label">Confirmar contraseña</label>
									<input type="password" class="form-control" id="inputConfirmPassword" required>
								</div>

								<div class="mb-3">
									<label for="grado-academico" class="form-label">Profesión/Area</label>
									<select class="form-select" id="grado-academico">
										<option selected disabled>Seleccione su Area</option>
										<option value="bachiller">Matematicas</option>
										<option value="licenciado">Ciencias</option>
										<option value="bachiller">Lenguaje y literatura</option>
										<option value="licenciado">Idiomas</option>
									</select>
								</div>

								<div class="mb-3">
									<label for="formFileMultiple" class="form-label">Fotografia de documento
										personal</label>
									<input class="form-control" type="file" id="formFileMultiple" multiple>
								</div>

								<div class="mb-3">
									<label for="telefono" class="form-label">Teléfono / Celular</label>
									<input type="tel" class="form-control" id="telefono">
								</div>

								<div class="mb-3">
									<label for="fecha-nacimiento" class="form-label">Fecha de nacimiento</label>
									<input type="date" class="form-control" id="fecha-nacimiento">
								</div>

								<button type="submit" class="btn btn-primary">Enviar</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>