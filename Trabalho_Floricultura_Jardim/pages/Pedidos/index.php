<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Pedidos</title>
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
    <p>PEDIDOS</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Novo Cliente</p>
    <form class="formulario" name="CadPedido" method="POST" action="../../php/Paginas/Pedidos/PedidoInsert.php">
      <label class="inputs">
        <strong>ID do Pedido</strong><br>
        <input type="number" name="id_pedido" placeholder="Informe o ID do Pedido" required><br>
      </label>
      <label class="inputs">
        <strong>Data</strong><br>
        <input type="date" name="data" placeholder="Informe a Data" required><br>
      </label>
      <label class="inputs">
        <strong>Status do Pedido</strong><br>
        <input name="status" placeholder="Selecione o Status do Pedido" required /><br>
      </label>
      <label class="inputs">
        <strong>Cliente</strong><br>
        <input name="cliente" placeholder="Selecione o cliente que realizou o Pedido" required/><br>
      </label>
      <label class="inputs">
        <strong>Funcionário</strong><br>
        <input name="funcionario" placeholder="Selecione o Funcionário que cadatrou o Pedido" required/><br>
      </label>
      <label class="inputs">
        <strong>Itens</strong><br>
        <input name="itens" placeholder="Selecione os Itens que fazem parte do Pedido" required /><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">  
      <button>
        <a href="../Pedidos/PedidoPageUpdate.php">Editar um Pedido</a>
      </button>
      <button>
        <a href="../Pedidos/PedidoPageDelete.php">Excluir um Pedido</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Data</td>
      <td>Status</td>
      <td>Cliente</td>
      <td>Funcionário</td>
      <td>Itens</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo " ";
    }
    $varSQL = "SELECT * FROM Pedido order by id_pedido";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["data_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["status_pedido"]; ?>
        </td>
        <td>
          <?php echo $i["id_cliente"]; ?>
        </td>
        <td>
          <?php echo $i["id_funcionario"]; ?>
        </td>
        <td>
          <?php echo $i["id_itens"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>