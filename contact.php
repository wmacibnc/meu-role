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

    <title>Mapas - Não se perca do Rolê</title>

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
                <a class="navbar-brand" href="index.html">Business Casual</a>
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
                    <h2 class="intro-text text-center">Outro
                        <strong> Calaf</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497960746478!6m8!1m7!1sOOYRzzbetI2HdxXUKMMGSQ!2m2!1d-15.80117748871059!2d-47.88187875456907!3f310.8047247764824!4f0.36993322615472835!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 3322-9581</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">http://outrocalaf.com.br/</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Sul
                            <br>Setor Bancário Sul 02 Q 5/6</strong>
                    </p>                        
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '8' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="8" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Pizza
                        <strong>Hut</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497961706884!6m8!1m7!1sZjGUeSXcE5xXM2b32naGWA!2m2!1d-15.81351016249982!2d-47.89079584169016!3f48.72284868575099!4f-0.0031375400997148972!5f2.118287055113124" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 9991-0085</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">http://pizzahutbrasilia.com.br/</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Sul
                            <br>CLS 213, BLOCO A, Loja 9</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '9' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="9" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Khoder
                        <strong>Bar</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497961842613!6m8!1m7!1seVOh70vN0QSQSaCEM9PPag!2m2!1d-15.75729564000269!2d-47.88256947782068!3f297.4169879920313!4f1.2250897175418771!5f3.325193203789971" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 98499-5288</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">https://www.facebook.com/khoderbar/</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Norte
                            <br>Comércio Local Norte 210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
                            <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '10' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="10" />
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
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Corujão
                        <strong>Lanches</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497961951189!6m8!1m7!1szpIrDs3P2Gz6hkp3RJjAGw!2m2!1d-15.64250571103508!2d-47.77846331487984!3f81.2628646935868!4f1.4953762742825063!5f3.0192042275893076" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 3967-4557</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">https://www.facebook.com/coruja.lanches/</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Quadra 17 CL 18 loja 06
                            <br>Sobradinho I</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
                            <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '12' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="12" />
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
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Garota
                        <strong>Carioca</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497962043901!6m8!1m7!1sAkcX4ObisIPLuDGnWCXMAA!2m2!1d-15.78706980334616!2d-47.88529740030447!3f298.5628542238731!4f5.427172052319591!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 3326-1840</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">http://www.pagefree.net/garota-carioca-df</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Norte
                            <br>Quadra Quadra 03 Bloco C, Loja - Setor Comercial Norte</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
                            <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '14' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="14" />
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
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Boulevard
                        <strong>Shopping</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497962255179!6m8!1m7!1sTAcooaqrCFS3YWtbBvj5pQ!2m2!1d-15.73518495558254!2d-47.89816781580447!3f319.4231862406558!4f6.72749524144659!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>0300 313 1061</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">http://www.boulevardbrasilia.com.br/</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Norte
                            <br>Setor Terminal Norte Conjunto J</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '15' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="15" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Parque da Cidade
                        <strong>D. Sarah Kubitschek</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497962653621!6m8!1m7!1s3H4uQ31ecTp39HLgwsPzjg!2m2!1d-15.79548505452436!2d-47.89525480511364!3f325.55440875397977!4f5.268767327899496!5f1.6317417254724584" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefone:
                        <strong>(61) 3329-0400</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">wbrasilia.com</a></strong>
                    </p>
                    <p>Endereço:
                        <strong>Asa Sul
                            <br>Srps - Brasília, DF, 70297-400</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '16' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="16" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Exemplo1
                        <strong>Olha os Mapinhas que guardamos pra você</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497960746478!6m8!1m7!1sOOYRzzbetI2HdxXUKMMGSQ!2m2!1d-15.80117748871059!2d-47.88187875456907!3f310.8047247764824!4f0.36993322615472835!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '17' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="17" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Exemplo2
                        <strong>Olha os Mapinhas que guardamos pra você</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1497960746478!6m8!1m7!1sOOYRzzbetI2HdxXUKMMGSQ!2m2!1d-15.80117748871059!2d-47.88187875456907!3f310.8047247764824!4f0.36993322615472835!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '18' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="18" />
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
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Pizzaria
                        <strong>São Paulo</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1498000548545!6m8!1m7!1sjIVWlEuxN_ZY2ReeWMQ-MQ!2m2!1d-15.64589868698054!2d-47.78843297156439!3f180.36237986956934!4f0.18748961136424214!5f1.1924812503605782" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">http://www.saopaulopizzaria.com.br/</a></strong>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
                        <!-- Comentário -->
                        <?php
                        $query = "SELECT ID, NOME, DESCRICAO, GUIA, DATA FROM COMENTARIO WHERE ATIVO = '1' AND GUIA = '19' ORDER BY DATA ";

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
                                        <form accept-charset="UTF-8" action="salvar-comentario-contact.php" method="POST">
                                            <input type="hidden" name="guia" value="19" />
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
        </div>


        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Sua opinião conta muito para nós. Nos conte o que achou dessa cidade maravilhosa, por favor!! Tamo junto galera. #Bsb #chamafio</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nome</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>O que achou?</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
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
