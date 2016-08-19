<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width,initial-scale=1">
        <title>Perfil - Shyme</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/perfil.css" />
    </head>
    <body>
        <?php include("header.php"); ?>
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-offset-1 col-md-10 base">
                    <div class="row">
                        
                        <div class="col-md-2 img-perfil"><img src="" alt="Perfil do usuário" /></div> <!-- banco -->
                        <div class="col-md-6 usr-info">
                            <h2>Nome de usuário</h2> <!-- banco -->
                            <h3>Curso: </h3> <!-- banco -->
                        </div>
                        
                        <div class="col-md-1 pts-usr"><p>pontos: 20</p></div><!-- banco -->
                    </div>    
                    
                </div>    
            </div>
            
            <div class="row">

                <div class="col-md-offset-1 col-md-2 usr-grp">
                    <ul> <!-- lista de grupos -->
                       <li>Fatec</li>
                       <li>ADS</li> 
                       <li>Shyme</li> 
                    </ul>
                </div>
                    
                
                <div class="col-md-8">
                    <!-- comunicados -->
                    <div class="div-comunicado">
                        <h3>Comunicados</h3>
                        <div> <!-- loop para gerar os comunicados -->
                            <a href="#"><h4>Titulo comunicado 1</h4></a>
                            <p>Descrição</p>
                        </div>
                        
                        <div>
                            <a href="#"><h4>Titulo comunicado 2</h4></a>
                            <p>Descrição</p>
                        </div> 
                        
                        <div>
                            <a href="#"><h4>Titulo comunicado 3</h4></a>
                            <p>Descrição</p>
                        </div> <!-- fim do loop -->
                    </div>
                    
                
                    <div class="div-noticias">
                        <!-- Noticias -->
                        <h3>Mais avaliadass</h3>
                        <div> <!-- loop para gerar os comunicados -->
                            <a href="#"><h4>Titulo noticia 1</h4></a>
                            <p>Descrição</p>
                        </div>
                        
                        <div>
                            <a href="#"><h4>Titulo noticia 2</h4></a>
                            <p>Descrição</p>
                        </div> 
                        
                        <div>
                            <a href="#"><h4>Titulo noticia 3</h4></a>
                            <p>Descrição</p>
                        </div> <!-- fim do loop -->
                    
                    </div>
                </div>
            </div>
        
        </div> <!-- container- fluid -->
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>