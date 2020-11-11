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
        <div class="m-5 p-5">
            <table class="table table-striped m-auto" style="max-width: 840px;">
                <?php
                $conn = mysqli_connect("localhost","root","","livraria");
                $sql = "select id, nome, autor from livros";
                
                
                function editar(){
                    //
                }
                if (isset($_POST['submit'])) {
                        if ($_POST['tipo']=="apagar"){
                            global $conn;
                            $del = "delete from livros where id = ".$_POST['id'];
                            $conn->query($del);
                            header_remove();
                            header("Location: ", $_SERVER['PHP_SELF']);
                        }
                }
                $resultados = mysqli_query($conn, $sql);
                if ($resultados->num_rows > 0){
                    echo 
                    '<thead>
                    <tr class="table-warning">
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>';
                    
                    foreach ($resultados as $row) {
                        $l = 30;
                        $title = strlen($row['nome'])>$l ? substr($row['nome'],0,$l-3).'...' : $row['nome'];
                        $author = strlen($row['autor'])>$l ? substr($row['autor'],0,$l-3).'...' : $row['autor'];
                        
                        echo 
                        '<tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$title.'</td>
                        <td>'.$author.'</td>
                        <td class="row">
                            
                            <form action="list.php" method="post">
                                <a class="btn btn-warning" href="edit.php?id='.$row['id'].'">Editar</a>
                                <input type="hidden" name="tipo" value="apagar">
                                <input type="hidden" name="id" value="'.$row['id'].'">
                                <input type="submit" name="submit" class="btn btn-warning" value="Apagar">
                            </form>
                        </td>
                        </tr>';

                    }
                    echo '</tbody>';
                    
                }
                else{
                    echo '<div class="w-25 text-warning">No books found</div>';
                }
                ?>
            </table>

        </div>
    </body>


</html>

<?php

?>

