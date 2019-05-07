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
    <title>Listagem de usuários - Minha Aplicação web</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/listar.css">
</head>

<body>
    <header>
        <div class="topnav">
            <a class="active" href="home.php">Início</a>
            <a href="../view/cadastrar.php">Cadastrar</a>
            <a href="../controller/logout.php">Sair</a>
        </div>
    </header>

    <section>
      <form method="post" enctype="multipart/form-data">
        <h1>Listagem de Usuários</h1>

        <div class="form-group">
          <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
          </div>

          <div>
            <label for="status">Status:</label>
            <select>
              <option value="todos">Todos</option>
              <option value="ativos">Ativos</option>
              <option value="inativos">Inativos</option>
            </select>
          </div>

        </div>

        <div class="form-btn">
          <input type="button" name="buscar" id="buscar" value="Buscar">
          <input type="button" name="limpar" id="limpar" value="Limpar">
          <input type="button" name="novo" id="novo" value="Novo">
        </div>
      </form>
      <hr>
    </section>

    <section id="tabela-usuarios">
      <table>
        <tr>
          <th>Nome</th>
          <th>Login</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>

        <?php
        $select = $con->query("SELECT * FROM users");
        $data = $select->fetchAll();
        foreach ($data as $row){
            echo '<tr>';
            echo '<td>'.$row["nome"].'</td>';
            echo '<td>'.$row["login"].'</td>';
            echo '<td>'.$row["status"].'</td>';
            echo '<td>
                    <a href="home.php?link=3&id='.$row["id"].'">'.'EDITAR'.'</a> 
                    <a href="home.php?link=4&id='.$row["id"].'">'.'EXCLUIR'.'</a>
                  </td>';
            echo '</tr>';
        }
        ?>
      </table>
    </section>

    <footer>
      <div>
        <p>Desenvolvido por Carlos Eduardo Soares</p>
      </div>
    </footer>
</body>

</html>