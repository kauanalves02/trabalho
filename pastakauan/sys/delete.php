<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
</head>
<body>
    <center>
    <h2>Excluir</h2>
    <form method="POST" action="delete.php">
    <input type="number" name="id" placeholder="ID"><br>
        <input type="submit" value="Deletar">
    </form>
<center>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];

    $sql = "DELETE FROM logins WHERE id=$id";

    if($conn->query($sql) === TRUE) {
        echo "Login excluido com sucesso!";
    }
}
$conn->close();
?>