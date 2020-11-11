<html>
    <head>
        <title>Pato Virtual</title>
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
                    <li class="nav-item">
                        <a class="nav-link" href="novo.php">Novo livro</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="list.php">Editar livro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sobre</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php
        
        $conn = mysqli_connect('localhost','root','','livraria');
        $sql = 'select * from livros where id = '.$_GET['id'];
        $resultado = $conn->query($sql)->fetch_assoc();
        
        $result = "";
            if (isset($_POST['submit'])) {
                $edit = 'update livros set '
                        . 'nome = "' . $_POST['titulo'].'", '
                        . 'autor = "' . $_POST['autor'].'", '
                        . 'editora = "' . $_POST['editora'].'", '
                        . 'ano = "' . $_POST['ano'].'", '
                        . 'isbn = "' . $_POST['isbn'].'", '
                        . 'resenha = "' . $_POST['resenha'].'", '
                        . 'estado = "' . $_POST['estado'].'", '
                        . 'preco = "' . $_POST['preco'].'" where id = '.$_POST['id'];
                if ($conn->query($edit) === TRUE) {
                    $result = "Livro editado com sucesso";
                    $resultado = $conn->query($sql)->fetch_assoc();
                } else {
                    $result = "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        
        
        
        ?>
        <form class="w-50 m-auto border p-4" action="edit.php?id=<?php echo $resultado['id'];?>" method="post">
            <h3 class="font-weight-bold mb-4">Editar livro: </h3>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID:</label>
                <div class="col-sm-10">
                    <input name="id" value="<?php echo $resultado['id']; ?>" type="text" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input name="titulo" value="<?php echo $resultado['nome']; ?>" type="text" class="form-control" placeholder="Título do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input name="autor" value="<?php echo $resultado['autor']; ?>" type="text" class="form-control" placeholder="Autor do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Editora</label>
                <div class="col-sm-10">
                    <input name="editora" value="<?php echo $resultado['editora']; ?>" type="text" class="form-control" placeholder="Editora do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ano</label>
                <div class="col-sm-10">
                    <input name="ano" value="<?php echo $resultado['ano']; ?>" type="text" class="form-control" placeholder="Ano do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ISBN</label>
                <div class="col-sm-10">
                    <input name="isbn" value="<?php echo $resultado['isbn']; ?>" type="text" class="form-control" placeholder="Número com 10 digitos" required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Resenha</label>
                <div class="col-sm-10">
                    <textarea name="resenha" type="text" class="form-control" placeholder="Resumo sobre o livro." required><?php echo $resultado['resenha']; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-10">
                    <input name="estado" value="<?php echo $resultado['estado']; ?>" type="text" class="form-control" placeholder="Estado de conservação do livro." required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Preço</label>
                <div class="col-sm-10">
                    <input name="preco" value="<?php echo $resultado['preco']; ?>" type="text" class="form-control" placeholder="Preço do livro." required>
                </div>
            </div>
            <div class="row justify-content-end">
                <a class="btn px-3 m-3 btn-warning" href="list.php">Voltar</a>
                <input name="submit" type="submit" class="btn px-3 m-3 btn-warning" value="Editar livro">
            </div>
            <div class='text-success m-auto'><?php echo $result; ?></div>

        </form>
    </body>


</html>