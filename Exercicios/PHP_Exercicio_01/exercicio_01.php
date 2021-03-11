<?php
// Variaveis dentro do vetor 
$nome = ["Anderson", "Giovana", "Matheus"];
$sobrenome = ["Souza", "Maia", "Borges"];
$idadeAtual = [date('Y') - 2000, date('Y') - 2004, date('Y') - 1989];
$endereco = ["Eletronorte", "Juventude", "Calama"];
$bairro = ["Nacional", "Floresta", "Olaria"];
$nCasa = [1235, 6290, 1780];
$dataAtual = date('d/m/Y');
$cidade = ["Porto Velho", "Coari", "Porto Velho"];
$estado = ["Rondônia", "Amazonas", "Rondônia"];
$email = ["anderson.souza@gmail.com", "gmaia.10@gmail.com", "matheus.ro@gmail.com"];
$telefone = ["(69) 99375-0541", "(97) 99875-3562", "(69) 97524-1542"];
$nomePais = ["Claudiana/Anderson", "Maria/Gold", "Julia/Guilherme"];
$dataNascimento = ["10/08/2000", "24/07/2004", "30/02/1989"];
$estadoCivil = ["solteiro", "solteira", "divorciado"];
$cadastro = [TRUE, FALSE, TRUE];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Relação de cadastro</title>
  <link rel="icon" href="./images/cadastro.png" />
</head>

<body>

<table class="table table-dark table-striped">
  
    <thead>
      <tr style="text-align:center">
        <th scope="col" style="text-align: left;">Relação</th>
        <th scope="col">Nome</th>
        <th scope="col">Sobrenome</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Idade atual</th>
        <th scope="col">Endereço</th>
        <th scope="col">Bairro</th>
        <th scope="col">N° Casa</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Email</th>
        <th scope="col">Telefone</th>
        <th scope="col">Estado Civil</th>
        <th scope="col">Nome dos Pais</th>
        <th scope="col">Data atual</th>
        <th scope="col">Cadastro</th>
      </tr>
    </thead>
    <tbody>
    <tr style="text-align:center">
        <th scope="row" style="text-align: left;">1</th>
        <td><?php echo $nome[0] ?></td>
        <td><?php echo $sobrenome[0] ?></td>
        <td><?php echo $dataNascimento[0] ?></td>
        <td><?php echo $idadeAtual[0] ?></td>
        <td><?php echo $endereco[0] ?></td>
        <td><?php echo $bairro[0] ?></td>
        <td><?php echo $nCasa[0] ?></td>
        <td><?php echo $cidade[0] ?></td>
        <td><?php echo $estado[0] ?></td>
        <td><?php echo $email[0] ?></td>
        <td><?php echo $telefone[0] ?></td>
        <td><?php echo $estadoCivil[0] ?></td>
        <td><?php echo $nomePais[0] ?></td>
        <td><?php echo $dataAtual ?></td>
        <td>
        <?php
          if($cadastro[0] == TRUE){
            echo "Ativo";
          } else {
            echo "Inativo";
          }
        ?>
        </td>
      </tr>
      <tr style="text-align:center">
        <th scope="row" style="text-align: left;">2</th>
        <td><?php echo $nome[1] ?></td>
        <td><?php echo $sobrenome[1] ?></td>
        <td><?php echo $dataNascimento[1] ?></td>
        <td><?php echo $idadeAtual[1] ?></td>
        <td><?php echo $endereco[1] ?></td>
        <td><?php echo $bairro[1] ?></td>
        <td><?php echo $nCasa[1] ?></td>
        <td><?php echo $cidade[1] ?></td>
        <td><?php echo $estado[1] ?></td>
        <td><?php echo $email[1] ?></td>
        <td><?php echo $telefone[1] ?></td>
        <td><?php echo $estadoCivil[1] ?></td>
        <td><?php echo $nomePais[1] ?></td>
        <td><?php echo $dataAtual ?></td>
        <td>
        <?php
          if($cadastro[1] == TRUE){
            echo "Ativo";
          } else {
            echo "Inativo";
          }
        ?>
        </td>
      </tr>
      <tr style="text-align:center">
        <th scope="row" style="text-align: left;">3</th>
        <td><?php echo $nome[2] ?></td>
        <td><?php echo $sobrenome[2] ?></td>
        <td><?php echo $dataNascimento[2] ?></td>
        <td><?php echo $idadeAtual[2] ?></td>
        <td><?php echo $endereco[2] ?></td>
        <td><?php echo $bairro[2] ?></td>
        <td><?php echo $nCasa[2] ?></td>
        <td><?php echo $cidade[2] ?></td>
        <td><?php echo $estado[2] ?></td>
        <td><?php echo $email[2] ?></td>
        <td><?php echo $telefone[2] ?></td>
        <td><?php echo $estadoCivil[2] ?></td>
        <td><?php echo $nomePais[2] ?></td>
        <td><?php echo $dataAtual ?></td>
        <td>
        <?php
          if($cadastro[2] == TRUE){
            echo "Ativo";
          } else {
            echo "Inativo";
          }
        ?>
        </td>
      </tr>
    </tbody>
  </table>
  
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>