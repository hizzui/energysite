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
	<div class="container" id="mercadoria">
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
		<main id="lastjobs-container" class="wrapper">
			<h1>Buscar Produtos</h1>
			<div id="job-filter">
				<div id="search-form">
					<form>
							<input type="text" name="job" placeholder="Digite o cargo">
							<select name="region">
								<option value="">Todos os estados</option>
							</select>
							<select name="category">
								<option value="">Categoria</option>
							</select>
							<input type="submit" value="Pesquisar">
						</form>
				</div>
				<div id="type-filter">
					<ul>
						<li>
							<input type="checkbox" checked><label>10 Unidades</label>
						</li>
						<li>
							<input type="checkbox" checked><label>50 Unidades</label>
						</li>
						<li>
							<input type="checkbox" checked><label>100 Unidades</label>
						</li>
						<li>
							<input type="checkbox" checked><label>200 Unidades</label>
						</li>
					</ul>	
				</div>
			</div>
			<ul>
				<li>
					
				</li>
			</ul>
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
						<h2>Artigos rescentes</h2>
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
