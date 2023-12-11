<?php

if(isset($_POST["submit"]))

{

    include_once("config.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $dtnascimento = $_POST["dtnascimento"];
    $estado_civil = $_POST["estado_civil"];

    $resultado = mysqli_query($conexao, "INSERT INTO dbform(nome,email,celular,dtnascimento,estado_civil) VALUES ('$nome','$email','$celular','$dtnascimento','$estado_civil')");



}

?>











<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.svgrepo.com/show/374861/edit-form.svg" type="image/x-icon">
    <link rel="stylesheet" href="style_form.css">
    <title>Formulário</title>
</head>
<body>
    <main>
        <form action="form.php" method="post">
            <div>
                <h1>Formulário</h1>
                <label for="nome">Nome Completo: </label>
                <input type="text" name="nome" id="nome" required>

                <label for="email">Email: </label>
                <input type="text" name="email" id="email" class="email" placeholder="ex:conta@email.com" required>

                <label for="celular">Celular: </label>
                <input type="text" name="celular" id="celular" class="celular" name="celular" placeholder="(DDD)1234-5678">

                <label for="dtnascimento">Data de Nascimento: </label>
                <input type="date" name="dtnascimento" id="dtnascimento" class="dtnascimento">

                <label for="estado_civil">Estado Civil:</label>
                <select id="estado_civil" name="estado_civil">
                  <option value="opcoes">--Selecione uma opção--</option>
                  <option value="solteiro">Solteiro(a)</option>
                  <option value="casado">Casado(a)</option>
                  <option value="divorciado">Divorciado(a)</option>
                  <option value="viuvo">Viúvo(a)</option>
                  <option value="separado">Separado(a)</option>
                  <option value="uniao_estavel">União Estável ou Amasiado(a)</option>
                  <option value="outro">outro</option>
                  
                

                  
                </select>
                <button type="submit" id="submit" name="submit" class="btn">Enviar</button>
            </div>
        </form>
        
    </main>
    
</body>
</html>