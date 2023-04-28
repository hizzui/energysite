<!DOCTYPE html>
<html>
<head>
	<title>Site de Energy Drink</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container" id="sendjobs">
		<header>
			<nav>
				<div class="nav-container">
			        <a href="index.php">
			            <img id="logo" src="./img/energy.webp" alt="Monster">
			        </a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="mercadoria.php">Buscar Produtos</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="contato.php">Entre em Contato</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main id="sendjobs-container" class="wrapper">
			<h1>Enviar uma solicitação</h1>
			<div class="input-box">
				<label>Selecione a opção desejada<span class="required">*</span></label>
				<select name="jobtype">
					<option value="">Escolha uma opção</option>
					<option value="pj">Minha Compra não chegou</option>
					<option value="clt">Estou com dificuldade de fazer o pagamento</option>
					<option value="homeoffice">Quero reembolso</option>
					<option value="freelancer">Outros</option>
				</select>
			</div>
			<div class="input-box">
				<label>Nome completo<span class="required">*</span></label>
				<input type="text" name="jobtitle" placeholder="Insira o nome completo">
			</div>
			<div class="input-box">
				<label>Email<span class="required">*</span></label>
				<input type="text" name="company" placeholder="Insira o email completo">
			</div>
			<div class="input-box">
				<label>Assunto<span class="required">*</span></label>
				<textarea name="description" placeholder="Escreva seu problema"></textarea>
			</div>
			<div class="input-box">
				<input type="submit" name="Enviar">
			</div>
		</main>
		<footer>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<h2>Dúvidas</h2>
						<p>Clique aqui para mais informações!</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Lugar para mais informações</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Drink's e muito mais</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
							<li>
								<a href="#">Drink's e muito mais</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
							<li>
								<a href="#">Drink's e muito mais</a>
								<span class="article-date">05 de fevereiro de 2023</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
			</div>
		</footer>
	</div>
</body>
</html>