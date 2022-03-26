<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
if((!isset ($_SESSION['nome']) == true) and (!isset ($_SESSION['senha']) == true)){
  header('location:index.php');
}

$logado = $_SESSION['nome'];
?>
<?php include("default.php"); ?>
</head>
<body>
		<div class="container">
			<?php
      		echo "<p class='logado'> Logado como $logado</p>";
			include("menu.php");
			?>
		</div>

	</body>
</html>