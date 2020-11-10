<html>
    <head>
        <title>Cadastro de clientes</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light mb-5" style="background-color: #f1a952">
            <a class="navbar-brand" href="index.php">Pato Virtual</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="novo.php">Novo livro</a>
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
        <form class="w-50 m-auto border p-4" action="novo.php" method="post">
            <h3 class="font-weight-bold mb-4">Informações do livro: </h3>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input name="titulo" type="text" class="form-control" placeholder="Título do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input name="autor" type="text" class="form-control" placeholder="Autor do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gênero</label>
                <div class="col-sm-10">
                    <input name="genero" type="text" class="form-control" placeholder="Gênero do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ano</label>
                <div class="col-sm-10">
                    <input name="ano" type="text" class="form-control" placeholder="Ano do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                    <input name="isbn" type="text" class="form-control" placeholder="Número com 10 digitos" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Resenha</label>
                <div class="col-sm-10">
                    <textarea name="resenha" type="text" class="form-control" placeholder="Resumo sobre o livro." required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-10">
                    <input name="estado" type="text" class="form-control" placeholder="Estado de conservação do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Preço</label>
                <div class="col-sm-10">
                    <input name="preco" type="text" class="form-control" placeholder="Preço do livro." required>
                </div>
            </div>
            <div class="row justify-content-end">
                <input name="submit" type="submit" class="btn px-3 m-3 btn-warning" value="Criar">
            </div>
            <?php
            $result = "";
            if (isset($_POST['submit'])) {
                $conn = mysqli_connect("localhost", "root", "", "livraria");
                $sql = 'insert into livros (nome, autor, genero, ano, isbn, resenha, estado, preco) values'
                        . '("' . $_POST['titulo']
                        . '","' . $_POST['autor']
                        . '","' . $_POST['genero']
                        . '","' . $_POST['ano']
                        . '","' . $_POST['isbn']
                        . '","' . $_POST['resenha']
                        . '","' . $_POST['estado']
                        . '","' . $_POST['preco'] . '")';
                if ($conn->query($sql) === TRUE) {
                    $result = "New record created successfully";
                } else {
                    $result = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            ?>
            <div class='text-success m-auto'><?php echo $result; ?></div>

        </form>
    </body>


</html>

