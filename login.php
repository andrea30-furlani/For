<?php include "cabecalho.php"; 
$esqueceuSenha = "\esqueceuasenha.php"
?>

<div class="page">
        <form method="POST" class="formLogin">
            <h2>Login</h2>
            <p>Digite os seus dados de acesso no campo abaixo.</p>

            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" autofocus="true" />

            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" />

            <?php echo  "<a href= .$esqueceuSenha >Esqueci minha senha</a>" ?>
            

            <input type="submit" value="Acessar" class="btn" />
        </form>
</div>

?>
<?php include "rodape.php"; ?>
        
   