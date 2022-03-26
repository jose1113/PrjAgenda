<!DOCTYPE html>
<html lang="pt-br">
    <?php include("default.php"); ?>
<body>
    <div class="container">
        <?php
        include("menu.php")
        ?>
    </div>
    
    <div class="styleLogin">
        <h2 class="text-center">Login</h2>
        <form action="login.php" method="post">
            <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>
    
            <?php } ?>
                
            <label for="nome">Nome de usuário</label>
            <input type="text" name="nome" require><br>
            
            <label for="senha">Senha</label>    
            <input type="password" name="senha" require><br> 
    
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>