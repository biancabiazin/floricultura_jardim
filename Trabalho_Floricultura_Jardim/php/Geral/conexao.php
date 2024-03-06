<?php
function conectaBD()
{
  $servername = "localhost";
  $database = "jardim";
  $username = "root";
  $password = "";

  $conexao = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
  );
  if (!$conexao) {
    die("Conexão falhou! " . mysqli_connect_error());
  } else {
    echo "Conexão realizada!";
  }
  return ($conexao);
}

function desconectaBD($conexao)
{
  mysqli_close($conexao);
}
