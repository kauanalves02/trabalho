<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hamburger Menu Animation</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <header>
        <h1><img class="logo" src="../fotos/logo.png"></h1>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon"></label>
        </label>
        <nav class="menu">
            <ul>
                <li><a href="../sys/inicio.php">Inicio</a></li>
                <li><a href="../sys/produtos.php">Produtos</a></li>
                <li><a href="../sys/destaques.php">Destaques</a></li>
                <li><a href="../sys/configuracoes.php">Configurações</a></li>
                <li><a href="../sys/areatec.php">Área Técnica</a></li> 
            </ul>
        </nav>
        
    </header> 
    <section>
        <h2>Bem-vindo ao nosso site!</h2>
        <p>É com imenso prazer que recebemos você em nosso site. Aqui, você encontrará uma ampla variedade de produtos incríveis, selecionados com cuidado para atender às suas necessidades e superar suas expectativas.

</p>
    </section>
<div class="content">
    <h2>Produtos</h2>

    <div class="produto-container">
        <img src="../fotos/joia.png" alt="Produto 1">
        <h3>Anel com Diamantes</h3>
        <p>Preço: R$ 299,00</p>
    </div>

    <div class="produto-container">
        <img src="../fotos/brinco.png" alt="Produto 2">
        <h3>brinco de prata c/ Diamantes</h3>
        <p>Preço: R$ 189.00</p>
    </div>

    <!-- Adicione mais produtos aqui -->

</div>

   
    <footer>
        <p>&copy; 2023 Meu Site. Todos os direitos reservados.</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuToggle = document.getElementById('menu-toggle');
            var menuIcon = document.querySelector('.menu-icon');

            menuToggle.addEventListener('change', function() {
                if (this.checked) {
                    menuIcon.classList.add('active');
                } else {
                    menuIcon.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
