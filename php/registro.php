<?php include('servidor.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
                <div class="nav-header">
                    <a href="#" class="navbar-brand">  </a>
                      <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
                      menu
                    </button>
            
            
                </div>
            
                <ul class="nav navbar-nav collapse navbar-collapse" >
                        <li><a href="index.html">Home</a></li>
                        <li><a href="historia.html">Historia</a></li>
                        <li><a href="registro.php">Cadastrar-se</a></li>
                        <li><a href="logar_usuario.php">Logar</a></li>
                        <li><a href="#">Contato</a></li>
                </ul>
              </nav>


  <div class="header">
  	<h2>Registro</h2>
  </div>
	
  <form method="post" action="registro.php">
  	<?php include('erros.php'); ?>
  	<div class="input-group">
  	  <label>Usuário</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Senha</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmar senha</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrar</button>
  	</div>
  	<p>
  		Já tem cadastro? <a href="logar_usuario.php">Sign in</a>
  	</p>
  </form>
</body>
</html>