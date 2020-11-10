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
        <div>
            <?php
              $db = mysqli_connect('localhost', 'root', '', 'livraria');
              $sql = 'select * from livros';
              $resultados = mysqli_query($db, $sql);
              foreach ($resultados as $index=>$row) {
                $a = new book();
                $a->set($row['nome'],$row['autor'],$row['ano'],$row['isbn'],$row['estado'],$row['preco'],'L'.$index,$row['resenha']);
                $a->print();
              }
            ?>
        </div>

        <?php

        class book {
            private $titulo = "";
            private $autor = "";
            private $ano = "";
            private $isbn = "";
            private $estado = "";
            private $preco = "";
            private $id = "";
            private $resenha = "";

            function set($titulo, $autor, $ano, $isbn, $estado, $preco, $id, $resenha){
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->ano = $ano;
                $this->isbn = $isbn;
                $this->estado = $estado;
                $this->preco = $preco;
                $this->id = $id;
                $this->resenha = $resenha;
            }
            
            function print(){
                echo'<div class="card text-dark bg-light mb-3 w-75 mx-auto">
                    <div class="card-header">
                        <h5 class="card-title">'.$this->titulo.'</h5>
                        <h6 class="card-subtitle text-muted">'.$this->autor.'</h6>
                    </div>
                    <div class="card-body p-5">
                        <div class="row">
                            <img class="d-block rounded" src="a2.jpg">
                            <div class="col row">
                                <div class="col">
                                    <p><b>Ano: </b>'.$this->ano.'</p>
                                    <p><b>ISBN: </b>'.$this->isbn.'</p>
                                    <p><b>Estado: </b>'.$this->estado.'</p>
                                </div>
                                <div class="col">
                                    <div>
                                        <b>Preço:</b>
                                        <h2 class="text-success">R$ '.$this->preco.'</h2>
                                    </div>
                                    <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#'.$this->id.'" aria-expanded="false" aria-controls="'.$this->id.'">
                                        Ver mais
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row collapse my-3" id="'.$this->id.'">
                            <div class="col m-auto ">'.$this->resenha.'</div>
                        </div>
                    </div>
                </div>';
            }
                    
        }
        
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>

