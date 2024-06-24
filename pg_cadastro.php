
<?php

    if(isset($_POST['submit']))
    {
      
        include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];

        $result = mysqli_query($conexao, "INSERT INTO Usuarios(nome, senha, email, data_nascimento) VALUES ('$nome','$senha','$email','$data_nascimento')");

        header('Location: pg_cadastro.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="pg_cadast.css" media="screen" />
</head>
<body>
    <div class="logo"></div>
  <div class="div1">Cadastro</div>

    <form action="pg_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required>


        <button type="submit" >Cadastrar</button>
    </form>

</body>
</html>
