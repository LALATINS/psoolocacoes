<?php

    include 'conection.php';

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];
    $cpf = $_POST ['cpf'];
    
    $recebendo_cadastro = "INSERT INTO usuarios VALUES ('', '$nome', '$email', '$senha', 'cpf')";
    $query_cadastros = mysqli_query ($con, $recebendo_cadastro);

    header ('location: /lista.php');

?>




<form>
        <div class="container">
            <div class="form-group">
              <form action="?page=salvar" method="POST">

                <label for="InputEmail1">Seu Nome: </label>
                <div class="col-sm-10">
                </div>
                <input type="text" class="form-control" id="Nome" placeholder="Nome completo">

                <label for="InputEmail1">Qual seu Email? </label>
                <div class="col-sm-10">
                </div>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">Por favor, digite seu melhor e-mail.</small>
              </div>
      
              <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Sua senha">
                <small id="senhaHelp" class="form-text text-muted">Use uma senha forte: (números, caracteres, letras maiúsculas e minúsculas).</small>
              </div>

            
                <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Manter-me logado</label>
                </div>
      
              <button type="submit" class="btn btn-primary">Cadastrar</button>
             </div>

    </form>
