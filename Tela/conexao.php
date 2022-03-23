<?php

$con = mysqli_connect("localhost","root","","prjagenda");

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO `cliente` (`codigo`, `nome`, `cidade`) VALUES ('0', '$nome', '$cidade')";

$rs = mysqli_query($con, $sql);

if($rs){
	echo "<h1>Cadastro realizado</h1>";
	echo "<a href='index.php'><button>Retornar</button></a>";
}
