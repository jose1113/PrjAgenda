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
            <h1 class="tituloForm">Cadastre um amigo</h1>
            <form method="POST" action="conexao.php">
                <label for="nome">Nome: 
                    <input type="text" name="nome" required/>
                </label>
                <label for="cidade">Cidade:
                    <input type="text" name="cidade" required/>
                </label>
                <button type="submit">Cadastrar</button>
            </form>

        </div>
	</body>
</html>