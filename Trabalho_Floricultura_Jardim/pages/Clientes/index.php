<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Clientes</title>
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
    <p>CLIENTES</p>
  </div>

  <div class="formulario-inserir">
    <p class="titulo-form">Inserir Novo Cliente</p>
    <form class="formulario" name="CadCliente" method="POST" action="../../php/Paginas/Clientes/ClienteInsert.php">
      <label class="inputs">
        <strong>ID do Cliente</strong><br>
        <input class="input" type="number" name="id_cliente" placeholder="Insira o ID" required><br>
      </label>
      <label class="inputs">
        <strong>Nome</strong><br>
        <input class="input" type="text" name="nome" placeholder="Insira o Nome" required><br>
      </label>
      <label class="inputs">
        <strong>Telefone</strong><br>
        <input class="input" type="tel" name="telefone" placeholder="Insira o Telefone" required><br>
      </label>
      <label class="inputs">
        <strong>Email</strong><br>
        <input class="input" type="email" name="email" placeholder="exemplo@exemplo.com" required><br>
      </label>
      <label class="inputs">
        <strong>CPF</strong><br>
        <input class="input" type="number" name="cpf" placeholder="Insira o CPF" required><br>
      </label>
      <label class="inputs">
        <strong>Endereço</strong><br>
        <input class="input" type="text" name="fk_endereco" placeholder="Insira o Endereço do Cliente" required><br>
      </label>
      <button class="limpar" type="reset" value="limpar">LIMPAR</button>
      <button class="inserir" type="submit" value="inserir">INSERIR</button>
    </form>
    <div class="botoes">  
      <button>
        <a href="../Clientes/ClientePageUpdate.php">Editar um Cliente</a>
      </button>
      <button>
        <a href="../Clientes/ClientePageDelete.php">Excluir um Cliente</a>
      </button>
    </div>
  </div>

  <table class="tabela" border="1">
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Telefone</td>
      <td>Email</td>
      <td>CPF</td>
      <td>Endereço</td>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "jardim");
    if (!$conn) {
      die("Conexão Falhou!" . mysqli_connect_error());
    } else {
      echo "";
    }
    $varSQL = "SELECT * FROM Cliente order by id_cliente";
    $resultado = mysqli_query($conn, $varSQL);
    while ($i = mysqli_fetch_assoc($resultado)) {
      ?>
      <tr>
        <td>
          <?php echo $i["id_cliente"]; ?>
        </td>
        <td>
          <?php echo $i["nome"]; ?>
        </td>
        <td>
          <?php echo $i["telefone"]; ?>
        </td>
        <td>
          <?php echo $i["email"]; ?>
        </td>
        <td>
          <?php echo $i["cpf"]; ?>
        </td>
        <td>
          <?php echo $i["fk_endereco"]; ?>
        </td>
      </tr>
      <?php
    }
    mysqli_close($conn);
    ?>
  </table>
</body>

</html>