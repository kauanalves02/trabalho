
<?php
include 'db.php';

$sql = "SELECT * FROM logins";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['name'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Senha: " . $row['senha'] . "<br><hr>";
    }
} else {
    echo "Nenhuma login encontrado.";
}

$conn->close();
?>
