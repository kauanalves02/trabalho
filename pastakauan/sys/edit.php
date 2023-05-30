<!DOCTYPE html>
<html>
<head>
    <title>Atualizar</title>

</head>
<body>

<center>
    <h2>Editar</h2>
    <form method="POST" action="edit.php">
        <input type="number" name="id" placeholder="ID"><br><br>
        <input type="text" name="name" placeholder="Nome"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="text" name="senha" placeholder="Senha"><br><br>
        <input type="submit" value="Atualizar">
    </form>
</center>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE logins SET name='$name', email='$email', senha='$senha' WHERE id=$id";

}

$conn->close();
?>