<?php 

$conn = new PDO("msql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FECH_ASSOC);

var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

	echo"=========================================================<br/>"
}

 ?>