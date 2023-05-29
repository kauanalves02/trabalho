<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Configurações</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="config.css">
    
</head>
<body>
    <header>
        <h1>Minha Loja de Acessórios</h1>
        <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav >
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="destaques.php">Destaques</a></li>
                <li><a href="configuracoes.php">Configurações</a></li> <!-- Novo item de configurações -->
            </ul>
        </nav>
            
            </label>
        </nav>
    </header>

    <div class="content">
        <h2>Configurações</h2>

        <h3>Alterar Senha</h3>
        <form>
            <label for="password">Nova Senha:</label>
            <input type="password" id="password" name="password">

            <label for="confirm-password">Confirmar Nova Senha:</label>
            <input type="password" id="confirm-password" name="confirm-password">

        <h3>Alterar Email</h3>
            <label for="email">Novo Email:</label>
            <input type="email" id="email" name="email">
        <h3>Entre em Contato</h3>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="message">Mensagem:</label>
            <textarea id="message" name="message"></textarea>

            <input type="submit" value="Salvar Dados">
        </form>
    </div>

    <footer>
        <p>&copy; 2023 Minha Loja de Acessórios. Todos os direitos reservados.</p>
    </footer>

    <script src="script.js"></script>
    <script src="javascript/configuracoes.js"></script>

</body>
</html>
