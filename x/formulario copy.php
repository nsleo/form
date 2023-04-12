<?php

  if(isset($_POST['submit']))
  {
    // print_r('Nome: ' . $_POST['tNome']);
    // print_r('<br>');
    // print_r('Número: ' . $_POST['tNum']);
    // print_r('<br>');
    // print_r('E-mail: ' . $_POST['tEmail']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['tSexo']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['tNasc']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['tRua']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['tEst']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['tCid']);


    include_once('config.php');

    $nome = $_POST['tNome'];
    $numero = $_POST['tNum'];
    $email = $_POST['tEmail'];
    $sexo = $_POST['tSexo'];
    $data_nasc = $_POST['tNasc'];
    $endereco = $_POST['tRua'];
    $estado = $_POST['tEst'];
    $cidade = $_POST['tCid'];
    
    $result = mysqli_query($conexao, "INSERT INTO teste(nome,numero,email,sexo,nascimento,endereco,estado,cidade)
    VALUES ('$nome','$numero','$email','$sexo','$data_nasc','$endereco','$estado','$cidade')");
    // var_dump($result);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"/>
  <title>Forms HTML/PHP</title>
  <script>
    function calc_total() {
      var qtd = parseInt(document.getElementById('cQtd').value);
      tot = qtd * 1500;
      document.getElementById('cTot').value = tot;
    }
  </script>
</head>
<body>
  <form method="post" id="fContato" action="formulario.php" oninput="calc_total();">
    <fieldset id="usuario">
      <legend>
        Dados de Cadastro
      </legend>
        <p>
          <label for="cNome">Nome:</label> 
          <input type="text" name="tNome" id="cNome" size="30" maxlength="40" placeholder="Nome Completo"/>
        </p>
        <p>
          <label for="cEmail">E-mail:</label>
          <input type="email" name="tEmail" id="cEmail" size="30" maxlength="40" placeholder="E-mail"/>
        </p>
        <p>
          <label for="cNasc">Data de Nascimento:</label>
          <input type="date" name="tNasc" id="cNasc"/>
        </p>
        <p>
          <label for="cTel">Telefone:</label> 
          <input type="tel" name="tTel" id="cTel" size="9" minlength="8" maxlength="9" placeholder="Celular"/>
        </p>
        <!-- <p>
          <label for="cNum">Número:</label> 
          <input type="number" name="tNum" id="cNum" size="30" maxlength="40" placeholder="Número"/>
        </p> -->
        <!-- <p>
          <label for="cSenha">Senha:</label> 
          <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Senha"/>
        </p> -->
        <!-- <fieldset class="sexo" id="sexo">
          <legend>
            Sexo:
          </legend>
            <input type="radio" class="sexo" name="tSexo" id="cMasc" value="Masculino" checked> <label for="cMasc">Masculino</label><br>
            <input type="radio" class="sexo" name="tSexo" id="cFem" value="Feminino"/> <label for="cFem">Feminino</label>
        </fieldset> -->
    <!-- </fieldset>

    <fieldset id="endereço"> -->
      <!-- <legend>
        Endereço do Usuário
      </legend> -->
        <p>
          <label for="cRua">Endereço:</label>
          <input type="text" name="tRua" id="cRua" size="27" maxlenght="80" placeholder="Rua, N°, Bairro"/>
        </p>
    </fieldset>
        <!-- <p>
          <label for="cNum">Número:</label>
          <input type="number" name="tNum" id="cNum" min="0" max="99999" placeholder="Número"/>
        </p> -->
        <!-- <p>
          <label for="cEst">Estado:</label>
          <select name="tEst" id="cEst">
            <option value="">Selecione</option>
            <optgroup label="Região Sudeste">
              <option value="RJ">Rio de Janeiro</option>
              <option value="SP">São Paulo</option>
              <option value="MG">Minas Gerais</option>
            </optgroup>
            <optgroup label="Região Sul">
              <option value="PR">Paraná</option>
              <option value="SC">Santa Catarina</option>
              <option value="RS" >Rio Grande do Sul</option>
            </optgroup>
          </select>
        </p> -->
        <!-- <p>
          <label for="cCid">Cidade:</label>
          <input type="text" name="tCid" id="cCid" size="20" maxlenght="40" placeholder="Cidade" list="cidades"/>
        </p>
        <datalist id="cidades">
          <option value="Esteio"></option>
          <option value="Sapucaia"></option>
          <option value="Canoas"></option>
          <option value="Porto Alegre"></option>
        </datalist>
    </fieldset> -->

    <!-- <fieldset id="mensagem">
      <legend>
        Mensagem do Usuário
      </legend>
        <p>
          <label for="cUrg">Grau de Urgência:</label>
          Min<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2">Max
        </p>
        <p>
          <label for="cMsg">Mensagem:</label>
          <textarea name="tMSG" id="cMsg" cols="45" rows="5" placeholder="Deixe aqui sua mensagem"></textarea>
        </p>
    </fieldset> -->

    <!-- <fieldset id="pedido">
      <legend>
        Quero um Google Glass
      </legend>
        <p>
          <input type="checkbox" name="tPed" id="cPed" checked>
          <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label>
        </p>
        <p>
          <label for="cCor">Cor:</label>
          <input type="color" name=tCor id="cCor" value="#0000FF">
          </p>
        <p>
          <label for="cQtd">Quantidade:</label>
          <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0">
        </p>
        <p>
        <label for="cTot">Preço Total: R$</label>
        <input type="text" name="tTot" id=cTot placeholder="Total a Pagar" readonly>
        </p>      
    </fieldset> -->
    <fieldset>
      <legend>Currículo</legend>
      <input type="file">
      <br>
      <input type="submit" name="submit" class="submit" id="submit" value="Enviar">
    </fieldset>
  </form>
</body>
</html>