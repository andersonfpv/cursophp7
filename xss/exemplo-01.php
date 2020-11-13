<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>
</form>

<?php 

if (isset($_POST['busca'])) {

	//Protege o site de ataques removendo as tags, no final é possível permitir algumas tags igual o exemplo abaixo:
	//echo strip_tags($_POST['busca'], "<strong>");

	//É possível proteger o site transformando tudo em texto conforme o exemplo abaixo:
	echo htmlentities($_POST['busca']);
}

 ?>