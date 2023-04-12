<?php

  $dbHost = 'localhost';
  $dbUsername = 'sorriso';
  $dbPassword = 'maroto';
  $dbName = 'formulario_estagio';

  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

  // TESTE DE CONEXÃO

  // if($conexao->connect_errno)
  // {
  //   echo "Erro";
  // }
  // else
  // {
  //   echo "Conexão efetuada com sucesso";
  // }

?>