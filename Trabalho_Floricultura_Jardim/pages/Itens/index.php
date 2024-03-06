<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Itens do Pedido</title>
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

  <div class="titulo">
    <p>ITENS DO PEDIDO</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Nova Lista de Itens</p>
    <form class="formulario" name="CadItens" method="POST" action="../../php/Paginas/  Itens/ItensInsert.php">
      <label class="inputs">
        <strong>ID</strong><br>
        <input class="input" type="number" name="id_itens" placeholder="Insira o ID da lista de Itens" required><br>
      </label>
      <label class="inputs">
        <strong>Qtd. Itens</strong><br>
        <input class="input" type="number" name="qtd_itens" placeholder="Insira a Quantidade" required><br>
      </label>
      <label class="inputs">
        <strong>Plantas</strong><br>
        <input class="input" name="fk_planta" placeholder="Selecione quais Plantas farão parte do Pedido" required/><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">
      <button>
        <a href="../Itens/ItensPageUpdate.php">Editar uma Lista de Itens</a>
      </button>
      <button>
        <a href="../Itens/ItensPageDelete.php">Excluir uma Lista de Itens</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Qtd_itens</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Itens_Pedido order by id_itens";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_itens"]; ?>
        </td>
        <td>
          <?php echo $i["qtd_itens"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>