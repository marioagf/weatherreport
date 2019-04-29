 <?php
$servername = "localhost:3306";
$username = "root";
$conn = new mysqli($servername, $username);

// Conexão
if($conn->connect_error){
    die("Erro de conexão ao banco de dados " . $conn->connect_error);
}

$sql = "SELECT id_cidade id FROM wr.cidades";
$result = $conn->query($sql);
$arr = array();

while($i = mysqli_fetch_assoc($result)) {
    $rows[] = $i;
}
print json_encode($rows);

?> 