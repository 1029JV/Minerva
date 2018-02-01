<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Minerva Granitos, empresa focada na venda de granitos.">
        <link rel="icon" href="img/logoMinerva.png">
        <title>Materiais</title>
    </head>

    <body>
        <!--TOPO-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style=" background-image: linear-gradient(60deg, #254b68, #0b1c31, #254b68, #0b1c31, #254b68)">
            <a class="navbar-brand" href="#">Minerva Granitos</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" id="linkInicio">
                        <a class="nav-link" href="index.html">Início</a>
                    </li>
                    <li class="nav-item" id="linkConservacao">
                        <a class="nav-link" href="index.html#conservacao">Conservação</a>
                    </li>
                    <li class="nav-item" id="linkContato">
                        <a class="nav-link" href="index.html#contato">Contato</a>
                    </li>
                    <li class="nav-item active" id="linkMateriais">
                        <a class="nav-link" href="#">Materiais</a>
                    </li>
                    <li class="nav-item" id="linkSilestone">
                        <a class="nav-link" href="silestone.html">Informações Silestone</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIM DO TOPO-->

        <!--MEIO-->
        <section class="marketing text-center container" id="conservacao">
            <hr class="featurette-divider">
            <h3>Mármores e Granitos</h3>
            <?php
            $marmoreegranito = array(
                "1" => "Amarelo Ipanema", "2" => "Amarelo Ornamental", "3" => "Amarelo Ouro", "4" => "Arabesco", "5" => "Branco Carrara", "6" => "Branco Cotton", "7" => "Branco Dallas", "8" => "Branco Imaculada", "9" => "Branco Itaúnas", "10" => "Branco Piguês", "11" => "Branco Pinta Verde", "12" => "Branco Rajado", "13" => "Branco Siena", "14" => "Cinza Andorinha", "15" => "Cinza Corumbá", "16" => "Cinza Ocre", "17" => "Crema Marfil", "18" => "Granito Cinza", "19" => "Marrom Absoluto", "20" => "Marta Rocha", "21" => "Ouro Branco", "22" => "Preto Absoluto", "23" => "Preto Nero Marquina", "24" => "Travertino Romano");
            echo "<div class='row'>";
            for ($i = 1; $i <= 24; $i++) {
                echo"
			";
                echo "<div class='col-lg-3'>";
                echo "<a href='img/original/" . $i . ".jpg' target='new'>";
                echo "<img class='rounded-circle' src='img/materiais/" . $i . ".jpg' alt='" . $marmoreegranito[$i] . "' title='" . $marmoreegranito[$i] . "'/></a>";
                echo "<h5>" . $marmoreegranito[$i] . "</h5>";
                echo " </div>";
                echo"
			";
            }
            echo "</div>";
            ?>
            <hr class="featurette-divider">
            <h3>Silestone</h3>
            <?php
            $silestone = array(
                "25" => "Altair", "26" => "Alumínio Nube", "27" => "Amazon", "28" => "Arden Blue", "29" => "Ariel", "30" => "Bianco Rivers", "31" => "Blanco Capri", "32" => "Blanco City", "33" => "Blanco Maple", "34" => "Blanco Norte", "35" => "Blanco Orion", "36" => "Blanco Stellar", "37" => "Blanco Zeus Extreme", "38" => "Calacatta Gold", "39" => "Calypso", "40" => "Carbono", "41" => "Cemento Spa", "42" => "Charcoal Soapstone", "43" => "Chrome", "44" => "Coral Clay", "45" => "Cream Stone", "46" => "Crema Minerva", "47" => "Cygnus", "48" => "Eros Stellar", "49" => "Green Fun", "50" => "Gris Expo", "51" => "Haiku", "52" => "Helix", "53" => "Ionic Black", "54" => "Ionic White", "55" => "Iron Bark", "56" => "Kensho", "57" => "Lagoon", "58" => "Lyra", "59" => "Marengo", "60" => "Merope", "61" => "Negro Anubis", "62" => "Negro Stellar", "63" => "Negro Tebas", "64" => "Niebla", "65" => "Noka", "66" => "Pearl Jasmine", "67" => "Phoenix", "68" => "Rosso Monza", "69" => "Rougui", "70" => "Royal Reef", "71" => "Serena", "72" => "Statuario", "73" => "Tigris Sand", "74" => "Unsui", "75" => "Vortium", "76" => "White Diamond", "77" => "White Platinum", "78" => "White Storm", "79" => "Yukon", "80" => "Zirconium");
            echo "<div class='row'>";
            for ($i = 25; $i <= 80; $i++) {
                echo"
			";
                echo "<div class='col-lg-3'>";
                echo "<a href='img/original/" . $i . ".jpg' target='new'>";
                echo "<img class='rounded-circle' src='img/materiais/" . $i . ".jpg' alt='" . $silestone[$i] . "' title='" . $silestone[$i] . "'/></a>";
                echo "<h5>" . $silestone[$i] . "</h5>";
                echo " </div>";
                echo"
			";
            }
            echo "</div>";
            ?>
        </section>
        <!--FIM DO MEIO-->

        <!--CONTATO-->  
        <section id="contato" class="container">
            <hr class="featurette-divider">
            <h3 class="text-center">Entre em contato:</h3>
            <form action="enviarEmail.php" method="post" class="form-group">
                <div class="col-lg-6 float-left">
                    <label class="col-form-label">Nome:</label><input type="text" name="iptNome" id="iptNome" class="form-control" placeholder="Pessoa ou empresa" required/>
                    <label class="col-form-label">Telefone:</label><input type="text" name="iptTelefone" id="telefone" class="form-control" placeholder="(00) 0000-0000" required/>
                </div>
                <div class="col-lg-6 float-right">
                    <label class="col-form-label">Email:</label><input type="email" name="iptEmail" id="iptEmail" class="form-control" placeholder="example@example.com" required/>
                    <label class="col-form-label">Assunto:</label><input type="text" name="iptAssunto" id="iptAssunto" class="form-control" placeholder="Orçamento, sugestão, dúvida, etc" required/>
                </div>
                <label class="col-form-label">Mensagem:</label><textarea name="txtMessage" id="txtMessage" class="form-control" rows="8" required></textarea><br/>
                <input class="btn btn-dark" type="submit" value="Enviar"/>
            </form> 
            <hr class="featurette-divider">
        </section>
        <!--FIM DO CONTATO-->  

        <!--RODAPÉ-->
        <footer id="rodape" class="container"> 
            <a href="https://www.facebook.com/minervagranitos/" target="new"><div id="facebook" class="redeIcon"><img class="redeIcone" src="img/ico/facebook.ico" alt="Facebook"/></div></a>
            <a href="#"><div id="googleplus" class="redeIcon"><img class="redeIcone" src="img/ico/googleplus.ico" alt="Google"/></div></a>
            <a href="#"><div id="instagram" class="redeIcon"><img class="redeIcone" src="img/ico/instagram.ico" alt="Instagram"/></div></a>
            <a href="#"><div id="twitter" class="redeIcon"><img class="redeIcone" src="img/ico/twitter.ico" alt="Twitter"/></div></a><br/><br/><br/>
            <p class="float-right"><a href="#">Voltar para o início</a></p>
            <p>&copy;2017 - Minerva Granitos. Todos os direitos reservados. Desenvolvido por Minerva Solutions.</p>
        </footer>
        <!--FIM DO RODAPÉ-->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.min.js"></script>
        <script src="js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
    </body>
</html>
