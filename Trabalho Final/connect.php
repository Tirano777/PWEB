<?php
$servername = "sql209.epizy.com";
$username = "epiz_31252084";
$password = "uEKgfctTfzuX";
$bdname = "epiz_31252084_confeitaria"

// Criar conexão
$conn = mysqli_connect($servername, $username, $password);

// Checar conexão
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>