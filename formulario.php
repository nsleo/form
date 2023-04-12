<?php

  if(isset($_POST['submit']))
  {
  //   print_r('Nome: ' . $_POST['Name']);
  //   print_r('<br>');
  //   print_r('E-mail: ' . $_POST['Email']);
  //   print_r('<br>');
  //   print_r('Data de Nascimento: ' . $_POST['Nasc']);
  //   print_r('<br>');
  //   print_r('Endereço: ' . $_POST['tRua']);
  //   print_r('<br>');


    include_once('conexao.php');

    $nome = $_POST['Name'];
    $email = $_POST['Email'];
    $data_nasc = $_POST['dataNasc'];
    $tel = $_POST['Tel'];
    $endereco = $_POST['Rua'];
    $inst_ensino = $_POST['InstEns'];
    $prev_formatura = $_POST['PrevForm'];
    $curso = $_POST['Curso'];
    $turno = $_POST['Turno'];
    $est_anterior = $_POST['EstAnt'];
    $ano_est_anterior = $_POST['Ano'];
    $se_pcd = $_POST['Pcd'];
    $desc_pcd = $_POST ['DescPcd'];
    $laudo_pcd = $_POST ['Laudo'];
    $atest_esc = $_POST ['Atest'];
    $CV = $_POST ['CV'];
    
    $result = mysqli_query($conexao, "INSERT INTO banco_estagiarios(nome,email,data_nasc,tel,endereco,inst_ensino,prev_formatura,curso,turno,est_anterior,ano_est_anterior,se_pcd,desc_pcd,laudo_pcd,atest_esc,curriculo)
    VALUES ('$nome','$email','$data_nasc','$tel','$endereco','$inst_ensino','$prev_formatura','$curso','$turno','$est_anterior','$ano_est_anterior','$se_pcd','$desc_pcd','$laudo_pcd','$atest_esc','$CV')");
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
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
    function checkPcd() {
      if (document.getElementById("PcdSim").checked) {
        document.getElementById("pcdSim").style.display = "block";
    } else {
      document.getElementById("pcdSim").style.display = "none";
      }
    }
    function checkEstAnt() {
      if (document.getElementById("EstSim").checked) {
        document.getElementById("EstAntSim").style.display = "block";
    } else {
      document.getElementById("EstAntSim").style.display = "none";
      }
    }
  </script>
</head>
<body>
  <form method="post" id="Contato" action="formulario.php">
    <div class="container">
      <div class="cabecalho">
        <fieldset class="campo" id="titulo">
          <h2>
            <p> INSCRIÇÃO PARA BANCO DE ESTAGIÁRIOS DA PREFEITURA MUNICIPAL DE ESTEIO</p>
          </h2><br>
          <p>Edital  de <?php echo date("Y") ?> para composição de banco de estagiários dx xxxxxxx xxxxxxxx xx xxxxx</p>
        </fieldset>
      </div>
      <div class="conteudo">
        <fieldset class="campo" id="usuario">
          <h3>
            <p class="titulo">DADOS DE CADASTRO</p>
          </h3>
            <div class="campoNome">
              <label class="label" for="Name">NOME:</label><br>
              <!-- oninvalid="this.setCustomValidity('Pleassse Enter valid email')" --> 
              <input type="text" name="Name" id="Name" size="30" maxlength="40" placeholder="Nome Completo" required name=Name/>
            </div>
            <div class="campoEmail">
              <label class="label" for="Email">E-MAIL:</label><br>
              <input type="email" name="Email" id="Email" size="30" maxlength="40" placeholder="E-mail" required name=Email/>
            </div>
            <div class="campoEndereco">
              <label class="label" for="Rua">ENDEREÇO:</label><br>
              <input type="text" name="Rua" id="Rua" size="30" maxlenght="80" placeholder="Rua, N°, Bairro" required name=Rua/>
            </div>
            <div class="campoDataNasc">
              <label class="label" for="dataNasc">DATA DE NASCIMENTO:</label><br>
              <input type="date" name="dataNasc" id="dataNasc" required name=dataNasc/>
            </div>
            <div class="campoTelefone">
                <label class="label" for="Tel">TELEFONE:</label><br>
                <input type="tel" name="Tel" id="Tel" size="9" minlength="8" maxlength="9" placeholder="Celular" required name=Tel/>
            </div>
            <div class="campoInstEnsino">
              <label class="label" for="InstEns">INSTITUIÇÃO DE ENSINO:</label><br>
              <input type="text" name="InstEns" id="InstEns" size="30" maxlength="40" placeholder="Escola, Faculdade" required name=InstEns>
            </div>
            <div class="campoPrevFormatura">
              <label class="label" for="PrevForm">FORMATURA:</label><br>
              <input type="number" name="PrevForm" id="PrevForm" min="2023" max="2030" placeholder="Ano" required name=PrevForm>
            </div>
            <div class="campoCurso">
              <label class="label" for="Curso">CURSO</label><br>
              <select name="Curso" id="Curso" required>
                    <option value="" disabled selected>SELECIONE SEU CURSO</option>
                <optgroup label="SUPERIOR">
                    <option value="Administração" required name=Curso>Administração</option>
                    <option value="Administração Pública Superior">Administração Pública Superior</option>
                    <option value="Administração de Empresas Superior">Administração de Empresas Superior</option>
                    <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                    <option value="Arquitetura E Urbanismo">Arquitetura E Urbanismo</option>
                    <option value="Artes Visuais">Artes Visuais</option>
                    <option value="Biologia">Biologia</option>
                    <option value="Ciências Contábeis">Ciências Contábeis</option>
                    <option value="Ciências da Computação">Ciências da Computação</option>
                    <option value="Comunicação Social - Publicidade E Propaganda">Comunicação Social - Publicidade E Propaganda</option>
                    <option value="Comunicação Social - Relações Públicas">Comunicação Social - Relações Públicas</option>
                    <option value="Design Gráfico">Design Gráfico</option>
                    <option value="Direito">Direito</option>
                    <option value="Educação Física Bacharelado">Educação Física Bacharelado</option>
                    <option value="Educação Física Licenciatura">Educação Física Licenciatura</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>
                    <option value="Engenharia da Computação">Engenharia da Computação</option>
                    <option value="Engenharia de Software">Engenharia de Software</option>
                    <option value="Farmácia">Farmácia</option>
                    <option value="Fonoaudiologia">Fonoaudiologia</option>
                    <option value="Gestão Pública">Gestão Pública</option>
                    <option value="Jornalismo">Jornalismo</option>
                    <option value="Medicina Veterinária">Medicina Veterinária</option>
                    <option value="Nutrição">Nutrição</option>
                    <option value="Pedagogia">Pedagogia</option>
                    <option value="Psicologia">Psicologia</option>
                    <option value="Serviço Social">Serviço Social</option>
                    <option value="Sistemas de Informação">Sistemas de Informação</option>
                    <option value="Tecnólogo Em Gestão De Recursos Humanos">Tecnólogo Em Gestão De Recursos Humanos</option>
                    <option value="Tecnólogo Em Gestão Ambiental">Tecnólogo Em Gestão Ambiental</option>
                    <option value="Tecnólogo Em Logística">Tecnólogo Em Logística</option>
                    <option value="Tecnólogo Em Meio Ambiente">Tecnólogo Em Meio Ambiente</option>
                    <option value="Tecnólogo Em Processos Gerenciais">Tecnólogo Em Processos Gerenciais</option>
                    <option value="Tecnólogo Em Segurança Do Trabalho">Tecnólogo Em Segurança Do Trabalho</option>
                </optgroup>
                <optgroup label="MÉDIO/TÉCNICO">
                    <option value="Médio Normal">Médio Normal</option>
                    <option value="Médio Técnico Em Administração Ou Integrado">Médio Técnico Em Administração Ou Integrado</option>
                    <option value="Médio Técnico Em Enfermagem">Médio Técnico Em Enfermagem</option>
                    <option value="Médio Técnico Em Contabilidade">Médio Técnico Em Contabilidade</option>
                    <option value="Médio Técnico Em Informática">Médio Técnico Em Informática</option>
                    <option value="Médio Técnico Em Meio Ambiente">Médio Técnico Em Meio Ambiente</option>
                    <option value="Médio Técnico Em Segurança Do Trabalho">Médio Técnico Em Segurança Do Trabalho</option>
                </optgroup>
              </select>
            </div>
            <div class="campoTurnoCurso">
              <label class="label" for="Turno">TURNO DE ESTUDO:</label><br>
              <input type="radio" name="Turno" id="Tarde" value="tarde" required name=Turno>
                <label class="opcao" for="Tarde">Tarde</label><br>
              <input type="radio" name="Turno" id="Manha" value="manha" required name=Turno>
                <label class="opcao" for="Manha">Manhã</label><br>
              <input type="radio" name="Turno" id="Noite" value="noite" required name=Turno>
                <label class="opcao" for="Noite">Noite</label><br>
              <input type="radio" name="Turno" id="Ead" value="ead" required name=Turno>
                <label class="opcao" for="Ead">EaD (ensino a distância)</label><br>
            </div>
            <div class="campoEstagioAnterior" onchange="checkEstAnt()">
              <label class="label" for="EstAn">REALIZOU ANTERIORMENTE ESTÁGIO Nx xxxxxxxxxx xx xxxxxx?</label><br>
              <input type="radio" name="EstAnt" id="EstSim" value="1" required name=EstAn>
                <label class="opcao" for="EstSim">Sim</label>
              <input type="radio" name="EstAnt" id="EstNao" value="0" required name=EstAn>
                <label class="opcao" for="EstNao">Não</label>
            </div>
            <div class="campoAnoEstAnt" id="EstAntSim">
              <label class="label" for="Ano">EM QUE ANO</label><br>
              <input type="number" name="Ano" id="Ano" min="2000" max="2023" placeholder="Ano"  required name=Ano>
            </div>
        </fieldset>
        <fieldset class="campo" id="DadosPcd">
          <!-- <h3>
            <p class="titulo">DADOS PCD</p>
          </h3> -->
          <div class="campoDadosPcd" onchange="checkPcd()">
            <label class="label" for="Pcd">O CANDIDATO É PCD (PESSOA COM DEFICIÊNCIA)?</label><br>
            <input type="radio" name="Pcd" id="PcdSim" value="1" required name=Pcd>
              <label class="opcao" for="PcdSim">Sim</label>
            <input type="radio" name="Pcd" id="PcdNao" value="0" required name=Pcd>
              <label class="opcao" for="PcdNao">Não</label>
          </div>
          <div id="pcdSim" style="display: none;">
          <div class="campoDescricaoPcd">
            <label for="DescPcd">DESCREVA A DEFICIÊNCIA:</label><br>
            <input type="text" name="DescPcd" id="DescPcd" placeholder="Descrição" required name=DescPcd>
          </div>
          <div class="campoLaudoPcd">
            <h3>LAUDO PCD</h3>
            <input type="file" name="Laudo" required name=Laudo>
          </div>
          </div>
        </fieldset>
        <fieldset class="campo" id="documentos">
          <h3>
            <p class="titulo">CURRÍCULO</p>
          </h3>
          <input type="file" name="CV" required name=CV>
          <br>
          <h3>
            <p class="titulo">ATESTADO DE ESCOLARIDADE</p>
          </h3>
          <input type="file" name="Atest" required name=Atest>
        </fieldset>
        <input type="submit" name="submit" class="submit" id="submit" value="Enviar">
      </div>
    </div>
  </form>
</body>
</html>