<!DOCTYPE html>
<html>
<head>
	<title>Site de Energy Drink</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
	<div class="container" id="findjobs">
		<header>
			<nav>
				<div class="nav-container">
          <a href="index.php">
            <img id="logo" src="./img/energy.webp" width="100%" height="100%" alt="Site de Energy Drink">
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
		<body>
			<div class="container" >
				<a class="links" id="paracadastro"></a>
				<a class="links" id="paralogin"></a>
				<p>
				<div class="content">      
				  <!--FORMULÁRIO DE LOGIN-->
				  <div id="login">
					<form method="post" action=""> 
					  <h1>Login</h1> 
					  <p> 
						<label for="email_login">Seu e-mail</label>
						<input id="email_login" name="email_login" required="required" type="text" placeholder="exemplo@gmail.com"/>
					  </p>
					  
					  <p> 
						<label for="senha_login">Sua senha</label>
						<input id="senha_login" name="senha_login" required="required" type="password" placeholder="senhaforte123" /> 
					  </p>
					  
					  <p> 
						<input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
						<label for="manterlogado">Manter-me logado</label>
					  </p>
					  
					  <p> 
						<input type="submit" value="Logar" /> 
					  </p>
					  
					  <p class="link">
						Ainda não tem conta?
						<a href="#paracadastro">Cadastre-se</a>
					  </p>
					</form>
				  </div>
			
				  <!--FORMULÁRIO DE CADASTRO-->
				  <div id="cadastro">
					<form method="post" action=""> 
					  <h1>Cadastro</h1> 
					  
					  <p> 
						<label for="nome_cad">Seu nome</label>
						<input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Nome" />
					  </p>
					  
					  <p> 
						<label for="email_cad">Seu e-mail</label>
						<input id="email_cad" name="email_cad" required="required" type="email" placeholder="exemplo@gmail.com"/> 
					  </p>
					  
					  <p> 
						<label for="senha_cad">Sua senha</label>
						<input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
					  </p>
					  
					  <p> 
						<input type="submit" value="Cadastrar"/> 
					  </p>
					  
					  <p class="link">  
						Já tem conta?
						<a href="#paralogin"> Ir para Login </a>
					  </p>
					</form>
				  </div>
				</div>
			  </div> 
			</p>
		</body>
</body>
</html>
