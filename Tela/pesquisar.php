<?php
include("default.php");

$con = new PDO('mysql:host=127.0.0.1;dbname=prjagenda', 'root', '');

$nome = "%".trim($_GET['pesquisa'])."%";

$sth = $con->prepare('SELECT * FROM `cliente` WHERE `nome` LIKE :nome');
$sth->bindparam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulado da busca</title>
</head>
<body class="resultado">
    
<?php
if (count($resultados)) {
    foreach($resultados as $Resultado) {
?>
<h3 class="resultadoEncontrado">Resultados encontrados:</h3>
<p><?php echo $Resultado['codigo']; ?> - <?php echo $Resultado['nome']; ?></p>
<a href="consultar.php">Retornar</a>
<br>
<?php
} } else {
?>
<h3>Não foram encontrados resultados pelo termo buscado.</h3>
<a href="consultar.php">Retornar</a>
<?php
}
?>
</body>
</html>