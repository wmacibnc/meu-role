<?php
// error
ini_set("display_errors",1);
ini_set("display_startup_erros",1);
error_reporting(E_ALL);
// config
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria de Rolês</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php
        if($_GET && $_GET['mensagem'] != null){
            ?>
            <script type="text/javascript">
                alert(<?php echo $_GET['mensagem'] ?>);
            </script>
            <?php
        }
        ?>
        <div class="brand">Achei o Rolê</div>
        <div class="address-bar">Conhecendo novos lugares | Brasília, BSB 1960 | #PartiuRolê</div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="index.html">Achei o Rolê</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">Nós</a>
                        </li>
                        <li>
                            <a href="blog.php">Galeria de Rolês</a>
                        </li>
                        <li>
                            <a href="contact.php">Mapas</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <div class="container">

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Se liga nesses
                            <strong>Rolês</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/calaf.jpg" alt="">
                        <h2>OUTRO CALAF
                            <br>
                            <small>SETOR BANCÁRIO SUL 02 Q 5/6</small>
                        </h2>
                        <p>Procurando uma boa casa noturna? Aqui está o "Outro Calaf", onde tudo é possivel. Uma das melhores opções de diversão nessa cidade. Musica boa, bebida à preços camaradas, mulheres bonitas e muito mais? é só aqui!! Chama fio</p>

                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '1' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="1" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/hut.jpg" alt="">
                    <h2>PIZZA HUT
                        <br>
                        <small>213 SUL</small>
                    </h2>
                    <p>Então quer dizer que você curte uma ótima pizza? Vem com a gente que vamos te apresentar a Pizza Hut. Arriscamos dizer que é a melhor pizza de BSB. E tem mais, boatos que nas segundas-feiras o rodízio é R$ 24,90 com 13 sabores diferentes. Partiu? </p>

                    <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '2' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="2" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/khoder.jpg" alt="">
                    <h2>KHODER BAR
                        <br>
                        <small>ASA NORTE COMÉRCIO LOCAL NORTE 210</small>
                    </h2>
                    <p>Um bar de narguilê com Dj e muita, mas muita gente bonita. Ótimo para relaxar e conhecer gente nova.</p>

                    <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '3' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="3" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/coruja.jpg" alt="">
                    <h2>CORUJÃO LANCHES
                        <br>
                        <small>QD 17 SOBRADINHO</small>
                    </h2>
                    <p>E se ja for tarde e bater aquela fome depois do Rolê? Deu ruim...Aonde vamos comer?
                        Relaxa, o Corujão tá ai pra isso. Aberto a madrugada toda pra salvar a gente nesse aperto. O que dizer desse lugar que mal conheço e já considero pakas? AAAH, ouvi dizer que lá em Planaltina vai abrir mais um, ou seja, MAIS COMIDAAA.</p>

<!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '4' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="4" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/carioca.jpg" alt="">
                        <h2>GAROTA CARIOCA
                            <br>
                            <small>QD 03 BLOCO C, LOJA - SETOR COMERCIAL NORTE - ASA NORTE</small>
                        </h2>
                        <p>Balada descontraída tem shows ao vivo de estilos populares variados e mixagem DJ, com baristas e coquetéis. Não vamos perder esses coquetéis com shows ao vivo né? Vou ligar pro bonde pra crescer o Rolê pra lá. </p>

<!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '5' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="5" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/cine.jpg" alt="">
                        <h2>CINEMA BOULEVARD
                            <br>
                            <small>ST SETOR TERMINAL NORTE CONJ J LJ T83 - ASA NORTE</small>
                        </h2>
                        <p>"Okay galera, mas vocês não vão dar dicas de Rolês pra quem estiver namorando?" Ou na pior das hipotéses, casados? BRINCADEIRA GALERA. Claro que vamos, reservamos essa dica especiamelte pra você levar sua mina ou sua mina te levar. Ou até mesmo, levar seu mlk ou sua princesinha, pra assistir algum filme da Disney. Cola lá que as salas do Cine Boulevard são ótimas. </p>

                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '6' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="6" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <img class="img-responsive img-border img-full" src="img/parque.jpg" alt="">
                        <h2>PARQUE DA CIDADE -  D. SARAH KUBITSCHEK
                            <br>
                            <small>SRPS - ASA SUL</small>
                        </h2>
                        <p>Vamos falar sobre o Parque da City. O Lugar mais dinâmico que tem em Brasília, lá tem o Nickolândia, a Lagoa, o famoso Foguetinho, Kart, Trilhas, Shows, Espaço pra churrascos, Ciclovias, Quadras de Esportes...UFA, posso passar o dia de dando as dicas de Rolês só nesse Parque. Sem contar que lá resume toda a sensação boa de BSB. Você não vai se arrepender. </p>

                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '7' ORDER BY DATA ";

                        $result = $con->query($query);
                        while($conta = $result->fetch_array(MYSQLI_ASSOC)){
                            echo '<div class="col-md-2 text-left">';
                            echo '<img class="img-responsive img-border img-full" src="img/usuario.png" alt="">';

                            echo '</div>';

                            echo '<div class="col-md-10 text-left">';
                            echo $conta['DESCRICAO'];
                            echo '</div>';

                            echo '<div class="col-md-12 text-left">';
                            echo $conta['NOME'];
                            echo '</div>';
                            
                        }
                        ?>

                        <div class="col-md-12 clear text-center"><hr><h3>Deixe seu Comentario</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid well span8">
                                <div class="panel panel-default">
                                    <div class="panel-body">                
                                        <form accept-charset="UTF-8" action="salvar-comentario-blog.php" method="POST">
                                            <input type="hidden" name="guia" value="7" />
                                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" />
                                            <br />
                                            <textarea class="form-control counted" name="descricao" placeholder="Digite uma mensagem" rows="5" style="margin-bottom:10px;"></textarea>
                                            <button class="btn btn-info" type="submit">Comentar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!-- Comentário -->

                        <hr>
                    </div>

                </div>
            </div>

        </div>
        <!-- /.container -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Projeçao 2017</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>