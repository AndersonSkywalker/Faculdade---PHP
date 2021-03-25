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

    <title>Boletim Escolar</title>
  </head>
  <body>

    <div class="container">
    <div class="title">Boletim Escolar</div>
    <div class="content">
      <form method="POST" action="resultado.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome Completo</span>
            <input type="text" placeholder="Insira o nome do Aluno" required id="aluno" name="aluno">
          </div>
          <div class="input-box">
            <span class="details">Curso</span>
            <input type="text" placeholder="Insira o curso do Aluno" required id="curso" name="curso" >
          </div>
          <div class="input-box">
            <span class="details">Professor</span>
            <input type="text" placeholder="Insira o nome do Professor" required id="professor" name="professor">
          </div>
          <div class="input-group">
            <span class="details">Disciplina</span>
            <select class="form-select" id="disciplina" name="disciplina" required>
              <option value="" selected disabled>Escolha um blox</option>
              <option value="Programando Web com PHP">Programando Web com PHP</option>
              <option value="Banco de Dados">Banco de Dados</option>
              <option value="Lógica de Programação">Lógica de Programação</option>
              <option value="Programação Orientada a Objetos">Programação Orientada a Objetos</option>
            </select>
            

          </div>

        </div>
        <div class="notes">
          <span class="g-title">Notas</span>
          <div class="category">
          <div class="input-box">
            <span class="details">Avaliação 1</span>
            <input type="text" placeholder="Insira a nota" required id="nota1" name="nota1">
          </div>
          <div class="input-box">
            <span class="details">Avaliação 2</span>
            <input type="text" placeholder="Insira a nota" required id="nota2" name="nota2">
          </div>
          <div class="input-box">
            <span class="details">Avaliação 3</span>
            <input type="text" placeholder="Insira a nota" required id="nota3" name="nota3">
          </div>
          <div class="input-box">
            <span class="details">Avaliação 4</span>
            <input type="text" placeholder="Insira a nota" required id="nota4" name="nota4">
          </div>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Calcular média">
        </div>
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

