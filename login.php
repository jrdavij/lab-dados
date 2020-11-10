<html>
    <head>
        <title>Cadastro de clientes</title>

        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light mb-5" style="background-color: #f1a952">
            <a class="navbar-brand" href="index.php">Pato Virtual</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="novo.php">Novo livro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">Editar livro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sobre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <br><br><br>
        <form class="form" action="login.php" method="post">
            <div class="form-item"><h3>Login</h3></div>
            <div class="form-item"><label>Usuário:</label><input name="usuario" type="text"></div>
            <div class="form-item"><label>Senha:</label><input name="senha" type="password"></div>
            <div class="form-item end"><input class="form-submit" type="submit" value="Confirmar"></div>
        </form>
    </body>
    
    <?php
    $username = "usuario"; //usuário padrão
    $senha = "senha"; //senha padrão
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if ($username == $_POST['usuario'] && $senha == $_POST['senha']){
            $logado = true;
            header("Location:index.php?logado=true");
        }
        else{
            header("Location: login.php");
        }
    }
    ?>
</html>

