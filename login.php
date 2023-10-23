<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!--TITULO DA PAGINA DE LOGIN-->
    <form action="logincontrole.php" method="post" name="login">
    <div class="main-login">
        <div class="left-login">
             <h1>Faça o login <br> E entre para o nosso time</h1>

             <!--GIF ILUSTRATIVO DO SITE: STORYSET.COM -->
             <img  class="left-login-img" src="imagens/fundologin.gif">
        </div>

        <!--FORMULARIO DE LOGIN-->
        <div class="right-login">
           <div class="card-login">
            <h1>ENTRAR</h1>
            <div class="textfield">
                <label for="usuario">Usuário</label>
                 <input type="text" name="usuario" placeholder="Usuário">
            </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                     <input type="password" name="senha" placeholder="Senha">
                </div>
               <a href="paginaprincipal.html"><button class="btn-login">Entrar</button></a> 
            </form>
           </div>
        </div>
   </div>
    
</body>
</html>