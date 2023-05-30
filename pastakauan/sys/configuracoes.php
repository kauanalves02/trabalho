<?php
$styleCSS = "../style/style.css";
$configCSS = "../style/config.css";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $styleCSS; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $configCSS; ?>">
</head>
<body>
    <header>
        <h1>Sweet Acessory</h1>
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav>
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="destaques.php">Destaques</a></li>
                <li><a href="configuracoes.php">Configurações</a></li>
                <li><a href="../sys/areatec.php">Área Técnica</a></li> 
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Configurações</h2>

        <h3>Alterar Senha</h3>
        <form method="POST" action="configuracoes.php">
        <label for="name">Nome:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Nova Senha:</label>
            <input type="password" id="senha" name="senha">

            <label for="confirm-password">Confirmar Nova Senha:</label>
            <input type="password" id="confirm-password" name="confirm-password">

        

            <input type="submit" value="Salvar Dados">
        </form>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Minha Loja de Acessórios. Todos os direitos reservados.</p>
    </footer>

    <script src="script.js"></script>
    <script src="javascript/configuracoes.js"></script>

</body>
</html>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO logins (name, email, senha) VALUES ('$name', '$email', '$senha')";
    $resultado = mysqli_query($conn, $sql);

    // Verifica se a consulta foi executada com sucesso
    if ($resultado) {
        echo "Login criado com sucesso!";
    } else {
        echo "Erro ao criar login: " . mysqli_error($conn);
    }
}
$conn->close()
?>
