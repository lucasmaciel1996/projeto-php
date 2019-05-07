<?php
    session_start();

    require_once ("../controller/conexao.php");
    $conectar = new conexao();
    $con = $conectar->connect();
    
    require_once ("../controller/usuario.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuários - Minha Aplicação web</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/cadastrar.css">
</head>

<body>
    <header>
        <div class="topnav">
            <a class="active" href="cadastrar.php">Cadastrar</a>
            <a href="home.php">Início</a>
            <a href="../controller/logout.php">Sair</a>
        </div>
    </header>

    <section id="area">
      	<form id="formulario" method="post" enctype="multipart/form-data">
        <h1>Cadastro / Edição de Usuários</h1>

        <fieldset>
        <legend>Formulário</legend>
			<label for="nome">Nome*:</label>
			<input type="text" id="nome" name="nome" class="campo_nome">

			<label for="login">Login*:</label>
			<input type="text" id="login" name="login" class="campo_login">

			<label for="senha">Senha*:</label>
			<input type="password" id="senha" name="senha" class="campo_senha">

			<label for="confirmacao">Confirmar senha*:</label>
			<input type="password" id="confirmacao" name="confirmacao" class="campo_confirmacao">
        	
        	<label for="status">Status:</label>
			<select class="campo_select">
				<option value="todos">Todos</option>
				<option value="ativos">Ativos</option>
				<option value="inativos">Inativos</option>
			</select>

		</fieldset>
	  	</form>
		  
		<div class="botoes-acao">
			<input type="button" name="salvar" id="salvar" value="Salvar">
			<input type="button" name="limpar" id="limpar" value="Limpar">
			<input type="button" name="retornar" id="retornar" value="Retornar">
        </div>
    </section>

    <footer>
		<div>
			<p>Desenvolvido por Carlos Eduardo Soares</p>
		</div>
    </footer>
</body>

</html>