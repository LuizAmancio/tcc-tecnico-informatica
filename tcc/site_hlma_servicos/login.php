<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_css/style.css">
    <link rel="stylesheet" href="login_css/menu.css">
    <title>Login</title>
</head>

<nav id="menu-principal-container">
	<h1><a href="index.php">HLMA SERVIÇOS</a></h1>

	<ul id="menu-principal">
		<li><a href="index.html">Cadastro</a></li>
		<li><a href="index.html">Serviços</a></li>
		<li><a href="#" id="cadastre-se-btn">Não tem uma conta?</a></li>
		
	</ul>
</nav>

<body>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login <br> E contrate nossos serviços!</h1>
            <img src="imagens/animacaologin.svg" class="left-login-image" alt="login animacao">
        </div>
        <div class="right-login"> 
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button class="btn-login">Login</button>
            </div>
        </div>
            
    </div>
    
    <footer>
    <div class="container-footer">
		<div class="footer">
			<div class="copyright">
				© 2022 Todos os direitos reservados | <a href="index.html">HLMA SERVIÇOS</a>
			</div>

			<div class="information">
				<a href="">Informações</a> | <a href="">Privacidade e Política</a> | <a href="">Termos e condições</a>
			</div>
	</div>
    </footer>
</body>
</html>