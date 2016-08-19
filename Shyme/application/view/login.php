<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Shyme</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/login.css" />
    </head>    
    
    <body>
        <nav class="navbar navbar-default">
            <a class="navbar-brand" href="index.php">Shyme</a>
        </nav>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 wrapper">
                    <h2>Bem-vindo ao Shyme</h2>
                    <form action="#" method="POST">
                        <!-- Formulario -->
                        <fieldset>        
                            <div class="form-group has-warning">
                                <label class="sr-only" for="txt_login">Login</label>
                                <input type="text" id="txt_login" name="txt_login" placeholder="Login" 
                                  pattern=".{9,}"/>
                            </div>
                            
                            <div class="form-group has-warning">
                                <label class="sr-only" for="txt_senha">Senha</label>
                                <input type="password" id="txt_senha" name="txt_senha" placeholder="Senha" />
                            </div>
                            
                            <button class="btn btn-primary">Logar</button>
                        </fieldset>
                       
                    </form> <!-- Formulario -->
                </div> <!-- Coluna -->
            </div> <!-- row -->
        </div> <!-- container -->
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </body>
</html>