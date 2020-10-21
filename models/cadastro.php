<html>
    <head>
        <title>Cadastro de clientes</title>
        
        <style>
            html, body{
                width: 100%;
                height: 100%;
                margin: 0px;
            }
            .top{
                background-color: #A52A2A;
                font-size: 20px;
                color: white;
                padding: 10px;
                font-family: Source Sans Pro,arial,sans-serif;
            }
            .card{
                margin:auto;
                width: 400px;
                border-radius: 4px;
                padding: 42px;
                box-shadow: 1px 1px 4px #ccc;
                font-family: Source Sans Pro, arial, sans-serif;
                color: #555;
            }
            .bottom{
                background-color: #A52A2A;
                color: white;
                padding: 10px;
                font-family: Source Sans Pro,arial,sans-serif;
            }
            label{
                color: #555;
                font-weigth: 600;
                font-size: 14px;
            }
            input{
                width: 100%;
                height: 31px;
                margin-top: 5px;
                margin-bottom: 10px;
                padding: 6px 12px;
                font-size: 15px;
                color: #555;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
            input:focus{
                outline: none;
                box-shadow: 0px 0px 5px skyblue;
            }
            .confirmar{
                background-color: #A52A2A;
                border: none;
                padding: 5px;
                margin-top: 30px;
                color: white;
                width: 50%;
                margin-left: auto;
                display: block;
            }
            .confirmar:active{
                transform: translateY(4px);
            }
        </style>
    </head>
    <body>
        <div class="top">Nome do site</div>
        <div style="padding:30px; margin:auto">
            <div class="card">
                <h2>Crie sua conta</h2>
                <br>
                <form action="index.php" method="POST">
                    <label>Nome completo:</label>
                    <input type="name" name="nome">
                    <label>E-mail:</label>
                    <input type="email" name="email">
                    <label>Senha:</label>
                    <input type="password" name="password">
                    <label>CPF:</label>
                    <input type="number" name="cpf">
                    <label>Endereço:</label>
                    <input type="text" name="endereco">
                    <label>Bairro:</label>
                    <input type="text" name="bairro">
                    <label>Número:</label>
                    <input type="number" name="numero">
                    <label>Cidade:</label>
                    <input type="text" name="cidade">
                    <label>Estado:</label>
                    <input type="text" name="estado">
                    <label>CEP:</label>
                    <input type="number" name="cep">
                    <input type="submit" class="confirmar" value="Cadastrar">
                </form>
            </div>
            
 <?php
if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["cpf"]) && !empty($_POST["endereco"]) && !empty($_POST["bairro"]) && !empty($_POST["numero"]) && !empty($_POST["cidade"]) && !empty($_POST["estado"]) && !empty($_POST["cep"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $bairro = $_POST["bairro"];
    $numero = $_POST["numero"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    
    $bd = mysqli_connect("localhost","root",null,"database");
    
    $sql = "Insert into clientes (nome, email, password, cpf, bairro, numero, cidade, estado, cep) values ('$nome','$email','$password','$cpf','$endereco','$bairro',$numero','$cidade','$estado','$cep')";
    
    mysqli_query($bd, $sql);
    
    $bd->close();
}
?>
        </div>
        <div class="bottom">Contato</div>
    </body>

</html>

