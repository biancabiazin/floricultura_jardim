<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='../Home/style.css'>
  <!-- <script src='script.js'></script> -->
</head>

<body>
<header class="cabecalho">
    <a href="../Home/index.html">
      <img class="cabecalho__imagem" src="../../public/icons/logo.png" alt="Logo Floricultura Jardim">
    </a>
    <nav class="cabecalho__navegador">
      <ul class="cabecalho__ul">
        <li class="cabecalho__li">
          <img class="cabecalho__imagem__nav" alt="">
          <a class="cabvecalho_a" href="../Plantas/index.php">PLANTAS</a>
        </li>
        <li class="cabecalho__li">
          <img class="cabecalho__imagem__nav" src="../../public/icons/Resume.png" alt="">
          <a class="cabvecalho_a" href="../Funcionarios/index.php">FUNCIONÁRIOS</a>
        </li>
        <li class="cabecalho__li cliente">
          <img class="cabecalho__imagem__nav" src="../../public/icons/Vector.png" alt="">
          <a class="cabvecalho_a" href="../Clientes/index.php">CLIENTES</a>
          <ul class="navegador__dropdown">
            <li class="cabecalho__dropdown__li">
              <img class="cabecalho__imagem__nav" src="../../public/icons/Truck.png" alt="">
              <a class="cabvecalho_a" href="../Pedidos/index.php">PEDIDOS</a>
            </li>
            <li class="cabecalho__dropdown__li">
              <img class="cabecalho__imagem__nav" src="../../public/icons/Trolley.png" alt="">
              <a class="cabvecalho_a" href="../Itens/index.php">ITENS DO PEDIDO</a>
            </li>
            <li class="cabecalho__dropdown__li">
              <img class="cabecalho__imagem__nav" src="../../public/icons/Location on.png" alt="">
              <a class="cabvecalho_a" href="../Enderecos/index.php">ENDEREÇOS</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <div class="formulario-inserir">
    <form class="formulario" method="POST" action="../../php/Paginas/Funcionarios/FuncionarioUpdate.php">
      <b> ID </b> <br> 
      <input class="input" type="number" name="id_funcionario"
        placeholder="Insira o ID do Funcionário que quer editar" value="<?php echo $idFuncionario ?>"><br>
      <b> Nome </b> <br> 
      <input class="input" type="text" name="nome" placeholder="Altere o Nome"
        value="<?php echo $nomeFuncionario ?>"><br>
      <b> CPF </b> <br> 
      <input class="input" type="number" name="cpf" placeholder="Altere o CPF"
        value="<?php echo $cpfFuncionario ?>"><br>
      <b> Cargo </b> <br> 
      <input class="input" type="text" name="cargo" placeholder="Altere o Cargo"
        value="<?php echo $cargoFuncionario ?>"><br>
      <b> Salário </b> <br> 
      <input class="input" type="number" name="salario" value="<?php echo $salFuncionario ?>"><br>
      <b> Contato </b> <br> 
      <input class="input" type="text" name="contato" placeholder="Altere o Contato"
        value="<?php echo $contFuncionario ?>"><br>
      <input class="limpar" type="reset" value="LIMPAR">
      <input class="inserir" type="submit" value="EDITAR">
    </form>
  </div>
</body>

</html>