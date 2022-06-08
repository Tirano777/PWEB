<?php

include connect.php;

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO pedido (descricao, numFatias, categoria) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $descricao, $numFatias, $categoria);

// Receber parametros
$descricao = 
$numFatias = 
$categoria = 
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>