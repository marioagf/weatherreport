 <?php
$servername = "localhost:3306";
$username = "root";
//$password = "<password>";
//$conn = new mysqli($servername, $username, $password);
$conn = new mysqli($servername, $username);

$id_cidade = $_GET['id_cidade'];

// Conexão
if($conn->connect_error){
    die("Erro de conexão ao banco de dados " . $conn->connect_error);
}

$sql = "SELECT id_cidade FROM wr.cidades WHERE id_cidade = $id_cidade";
$result = $conn->query($sql);

// Verifica se já não existe
if ($result->num_rows > 0) {
	echo -1;
}else{
	$ins = "INSERT INTO wr.cidades VALUES ($id_cidade)";
	$result = $conn->query($ins);
	echo 1;
}

?> 