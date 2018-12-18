<?php
$servername = "localhost:3306";
$database = "formulario";
$username = "root";
$password = "jk100991";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 

$nome = $_POST["nome"]; 
$cpf = $_POST["cnpj"];
$email = $_POST["email"]; 
$local_1 = $_POST["local-1"]; 
$telefone = $_POST["telefone"];

 
$sql = "INSERT INTO contato (nome, local_1, email, cpf, telefone) VALUES ('$nome', '$local','$email' ,'$cpf' '$telefone')";
if (mysqli_query($conn, $sql)) {
       header('Location:http://localhost/trab/retorno.html');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
