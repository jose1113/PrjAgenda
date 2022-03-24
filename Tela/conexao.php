<?php
include("default.php");

$con = mysqli_connect("localhost","root","","prjagenda");

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO `cliente` (`codigo`, `nome`, `cidade`) VALUES ('0', '$nome', '$cidade')";

$rs = mysqli_query($con, $sql);

if($rs){
	echo "<div class='retornar'>
			<h1>Cadastro realizado</h1>
			<a href='cadastrar.php'>
				<button>Retornar</button>
			</a>
		</div>";
}
