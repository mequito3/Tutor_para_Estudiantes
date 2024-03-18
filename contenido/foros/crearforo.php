	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<title>Foro </title>
	<style>
		.container {
			margin: 0 auto;
			max-width: 800px;
			padding: 20px;
		}

		.post {
			margin-bottom: 20px;
			border: 1px solid #ccc;
			padding: 10px;
		}

		.post h2 {
			margin-top: 0;
		}

		.post p {
			margin-bottom: 10px;
		}

		.form-group {
			margin-bottom: 10px;
		}

		.form-group label {
			display: block;
		}

		.btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin-bottom: 10px;
			cursor: pointer;
			border-radius: 5px;
		}

		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Foro sin base de datos</h1>
		<div id="posts"></div>
		<form>
			
			<div class="form-group">
				<label for="title">Título</label>
				<input type="text" id="title" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="title">Categoria</label>
				<select class="form-select" id="grado-academico">
					<option selected disabled>Seleccione su Area</option>
					<option value="bachiller">Matematicas</option>
					<option value="licenciado">Ciencias</option>
					<option value="bachiller">Lenguaje y literatura</option>
					<option value="licenciado">Idiomas</option>
				</select>
			</div> 

			<div class="form-group">
				<label for="message">Comentario</label>
				<textarea id="message" class="form-control" required></textarea>
			</div>
			<button type="	submit" class="btn" onclick="addPost(event)">Publicar</button>
		</form>
	</div>







	<script>
		let posts = [];

		function addPost(event) {
			event.preventDefault();
			let title = document.getElementById('title').value;
			let message = document.getElementById('message').value;
			let post = {
				title: title,
				message: message
			};

			posts.push(post);
			renderPosts();
			document.getElementById('title').value = '';
			document.getElementById('message').value = '';
		}

		function renderPosts() {
			let postsContainer = document.getElementById('posts');
			postsContainer.innerHTML = '';
			posts.forEach((post, index) => {
				let postElement = document.createElement('div');
				postElement.classList.add('post');
				let titleElement = document.createElement('h2');
				titleElement.textContent = post.title;
				let messageElement = document.createElement('p');
				messageElement.textContent = post.message;
				postElement.appendChild(titleElement);
				postElement.appendChild(messageElement);

				// Agregar botón de respuesta
				let replyButton = document.createElement('button');
				replyButton.textContent = 'Responder';
				replyButton.addEventListener('click', function () {
					showReplyForm(index);
				});
				postElement.appendChild(replyButton);

				postsContainer.appendChild(postElement);
			});
		}

		function showReplyForm(postIndex) {
			let post = posts[postIndex];
			let form = document.createElement('form');
			let commentInput = document.createElement('input');
			commentInput.type = 'text';
			commentInput.placeholder = 'Escribe tu respuesta aquí...';
			let submitButton = document.createElement('button');
			submitButton.type = 'submit';
			submitButton.textContent = 'Enviar';
			form.appendChild(commentInput);
			form.appendChild(submitButton);
			form.addEventListener('submit', function (event) {
				event.preventDefault();
				let commentText = commentInput.value;
				if (commentText) {
					if (!post.comments) {
						post.comments = [];
					}
					post.comments.push(commentText);
					renderPosts();
				}
			});
			let postElement = document.querySelectorAll('.post')[postIndex];
			postElement.appendChild(form);


			posts.push(postIndex);
			showReplyForm();
			document.getElementById('text').value = '';
		}
	</script>


<style>
		.container {
			margin: 0 auto;
			max-width: 800px;
			padding: 20px;
		}
		.form-group {
			margin-bottom: 10px;
		}
		.form-group label {
			display: block;
		}
		.btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin-bottom: 10px;
			cursor: pointer;
			border-radius: 5px;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
        .chat {
            margin-bottom: 20px;
			border: 1px solid #ccc;
			padding: 10px;
        }
	</style>

</body>