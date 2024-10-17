<?php
// Servidor desligado
$connection_string = "mysql://root:yKRUDkwAwZsqPolOVCZEqmcAlDhsJrRb@autorack.proxy.rlwy.net:36222/railway";

// Start connection
$conn = new mysqli($connection_string);
if ($conn->connect_error) {
  die($conn->connect_error);
}

// Teste: utilize o arquivo export.sql e veja se o código abaixo executa normalmente
$result = $conn->query("SELECT * FROM example");

if ($result->num_rows <= 0) {
  echo "NULL";
}
else {
  while ($row = $result->fetch_assoc()) {
    echo $row["id"] . " " . $row["col1"];
    echo "<br>";
  }
}

$conn->close();