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
	<input type="text" id="input-search" placeholder="Buscar...">
	<h1>Ejemplo de tabla con filtro</h1>
   
</body>
<table id="my-table" class="table">
	<thead>
	  <tr>
		<th>Nombre de Foro</th>
		<th>Categoria</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<td>¿Como sumo 2+2?</td>
		<td>Matematicas</td>
	  </tr>
	  <tr>
		<td>¿Como se calcula el porcentaje de agua?</td>
		<td>Quimica</td>
	  </tr>
	  <tr>
		<td>¿Cual es el moraleja de la historai de Edipo?</td>
		<td>Literatura</td>
	  </tr>
	</tbody>
  </table>
  

<script>
	document.querySelector('#input-search').addEventListener('input', function() {
  // Código de filtrado de la tabla aquí
});
document.querySelector('#input-search').addEventListener('input', function() {
  let filter = this.value.toUpperCase(); // Obtener el valor del campo y convertirlo a mayúsculas
  let table = document.querySelector('#my-table'); // Obtener la tabla
  let rows = table.querySelectorAll('tr'); // Obtener todas las filas de la tabla

  // Recorrer todas las filas y mostrar / ocultar según si contienen el término de búsqueda o no
  for (let i = 1; i < rows.length; i++) { // Iniciar en 1 para omitir la fila de encabezado
    let cells = rows[i].querySelectorAll('td'); // Obtener todas las celdas de la fila
    let shouldShow = false; // Bandera que indica si se debe mostrar la fila o no

    // Recorrer todas las celdas de la fila y buscar si contienen el término de búsqueda
    for (let j = 0; j < cells.length; j++) {
      let cell = cells[j];
      let text = cell.textContent.toUpperCase();
      if (text.indexOf(filter) > -1) {
        shouldShow = true;
        break; // Si una celda contiene el término de búsqueda, no hay necesidad de seguir buscando
      }
    }

    // Mostrar u ocultar la fila según si se debe mostrar o no
    if (shouldShow) {
      rows[i].style.display = '';
    } else {
      rows[i].style.display = 'none';
    }
  }
});


$(document).ready(function() {
    // Obtener el elemento de entrada de texto del filtro
    var filtro = $("#pais-filtro");

    // Agregar un evento de entrada para el filtro
    filtro.on("input", function() {
      // Obtener el valor del filtro
      var valor = $(this).val().toLowerCase();

      // Ocultar todas las filas de la tabla
      $("tbody tr").hide();

      // Mostrar las filas que coinciden con el filtro
      $("tbody tr").each(function() {
        var pais = $(this).find("td").eq(2).text().toLowerCase();
        if (pais.includes(valor)) {
          $(this).show();
        }
      });
    });
  });
</script>