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
        <form class="formulario" method="POST" action="../../php/Paginas/Clientes/ClienteUpdate.php">
            <b> ID </b> <br> 
            <input class="input" type="number" name="id_cliente" placeholder="Insira o ID do Cliente que quer editar" value="<?php echo $idCliente ?>"><br>
            <b> Nome </b> <br> 
            <input class="input" type="text" name="nome" placeholder="Altere o Nome"
                value="<?php echo $nomeCliente ?>"><br>
            <b> Telefone </b> <br> 
            <input class="input" type="tel" name="telefone" placeholder="Altere o Telefone"
                value="<?php echo $telCliente ?>"><br>
            <b> Email </b> <br> 
            <input class="input" type="email" name="email" placeholder="Altere o email (exemplo@exemplo.com)"
                value="<?php echo $emailCliente ?>"><br>
            <b> CPF </b> <br> 
            <input class="input" type="number" name="cpf" value="<?php echo $cpfCliente ?>"><br>
            <b> Endereço </b> <br> 
            <input class="input" type="text" name="fk_endereco" placeholder="Altere o Endereço do Cliente"
                value="<?php echo $endeCliente ?>"><br>
            <input class="limpar" type="reset" value="LIMPAR">
            <input class="inserir" type="submit" value="EDITAR">
        </form>
    </div>
</body>

</html>