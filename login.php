<?php include("header.php"); ?>

     

<div class="container">

      <form action="validar.php" method="Post" class="form-signin">
        <h2 class="form-signin-heading" align="center">Bem-Vindo</h2>
        <label for="inputEmail" class="sr-only">email</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Digite seu email" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Digite sua senha" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar
          </label>
          <label>
          <a href="cadastro.php">Realizar Novo Cadastro</a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->

<?php include("footer.php"); ?>