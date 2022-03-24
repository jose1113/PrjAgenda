<!DOCTYPE HTML>

<html lang="pt-br">
	<?php
	include("default.php");
	?>
	<body>
		<div class="container">
			<?php
			include("menu.php")
			?>
		</div>

        <div class="container">
            <h1 class="tituloForm">Procurar por amigo</h1>
            <form method="GET" action="pesquisar.php">
                <label for="pesquisa">Nome ou cidade: 
                    <input type="text" name="pesquisa" />
                </label>
                <button type="submit">Pesquisar</button>
            </form>
        </div>
	</body>
</html>