<?php
      $aluno = $_POST['aluno'];
      $curso = $_POST['curso'];
      $professor = $_POST['professor'];
      $disciplina = $_POST['disciplina'];
      $nota1 = $_POST['nota1'];
      $nota2 = $_POST['nota2'];
      $nota3 = $_POST['nota3'];
      $nota4 = $_POST['nota4'];
      $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

      if($media >= 7){
        $situacao = "Aprovado";
      } elseif($media >= 4 && $media < 7){
        $situacao = "Está de recuperação";
      } else {
        $situacao = "Reprovado";
      }
      ?>

<!doctype html>
<html lang="pt_br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./images/icon-boletim2.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Boletim Escolar - Resultado</title>
  </head>
  <body>
  
  <div class="container2">
    <div class="title">Situação do Aluno</div>
    <div class="content">
        <div class="user-details">
          <div>
            <span class="details">Nome: <b><?php echo $aluno."<br>"; ?></b></span>      
         </div>
          <div>
            <span class="details">Curso: <b><?php echo $curso."<br>"; ?></b></span>
          </div>
          
          <div>
            <span class="details">Disciplina: <b><?php echo $disciplina."<br>"; ?></b></span>
          </div>
          
          <div>
            <span class="details">Professor Responsável: <b><?php echo $professor."<br>"; ?></b></span>
          </div>
          <div>
            <span class="details">Média Total do Aluno: <b><?php echo round($media, 1)."<br>";
 ?></b></span>
          </div>
          
    <div>
            <span class="details">Situação: <b><?php echo $situacao."<br>"; ?></b></span>
          </div>
          <form action="index.php">
          <div class="button">
          <input type='submit' value='Voltar'
          />
          </form>
           
        </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>

