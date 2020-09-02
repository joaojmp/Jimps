<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="icon" href="imgs/favicon.png" />
    <title>Jimp's</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="imgs/favicon.png" style="width: 50px;"> Web Development</div>
            <div class="list-group list-group-flush">
                <div class="position-fixed">
                    <a href="#home" id="linkHome" class="list-group-item list-group-item-action bg-light text-light"><i class="fas fa-home"></i>&nbsp; Home</a>
                    <a href="#portfolio" id="linkPortfolio" class="list-group-item list-group-item-action bg-light"><i class="fas fa-images"></i>&nbsp; Portfólio</a>
                    <a href="#contato" id="linkContato" class="list-group-item list-group-item-action bg-light"><i class="fas fa-phone"></i>&nbsp; Contato</a>
                    <a href="https://github.com/joaojmp" target="_blank" class="list-group-item list-group-item-action bg-light"><i class="fab fa-git-alt"></i>&nbsp; Github</a>
                </div>
            </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg">
                <span class="menu-toggle cursor-pointer" id="menu-toggle"><i class="fas fa-bars"></i></span>
            </nav>

            <div class="container-fluid">
                <div class="container-fluid mt-4 position-relative d-inline-block divs" id="home">
                    <img class="w-100 rounded d-block" src="../imgs/background.jpg">
                    <p class="centered w-100">Nós Amamos Programar Websites</p>
                </div>
                <hr>
                <div class="container-fluid pt-5 pb-5 position-relative d-inline-block divs" id="portfolio">
                    <div class="w-100" id="portfolio">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imgs/site1.png" class="d-block w-100" alt="Aplaca">
                                    <div class="carousel-caption d-none d-md-block rounded text-white" style="background: rgba(102, 44, 44, 100%)">
                                        <h3><a href="https://www.aplaca.com.br/" target="_blank" class="link">Aplaca</a></h3>
                                        <p>Site feito para uma Empresa de Comunicação Visual.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="imgs/site2.png" class="d-block w-100" alt="JNC">
                                    <div class="carousel-caption d-none d-md-block rounded text-white" style="background: rgba(102, 44, 44, 100%)">
                                        <h3><a href="http://www.jncdistribuidora.com.br/" target="_blank" class="link">JNC</a></h3>
                                        <p>Site feito para uma Empresa de Vendas de Peças.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="imgs/site3.png" class="d-block w-100" alt="JNC">
                                    <div class="carousel-caption d-none d-md-block rounded text-white" style="background: rgba(102, 44, 44, 100%)">
                                        <h3><a href="http://portaldocliente.jncdistribuidora.com.br/deslogado/index.php" target="_blank" class="link">Loja JNC</a></h3>
                                        <p>Loja Virtual feito para uma Empresa de Vendas de Peças.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="imgs/site4.png" class="d-block w-100" alt="BM">
                                    <div class="carousel-caption d-none d-md-block rounded text-white" style="background: rgba(102, 44, 44, 100%)">
                                        <h3><a href="https://www.bmmatconstrucao.com.br/" target="_blank" class="link">BM</a></h3>
                                        <p>Site Feito para uma Empresa de Materiais de Construção.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container-fluid mt-2 position-relative d-inline-block divs" id="contato">
                    <form action="mail.php" id="form" method="POST">
                        <div class="row text-light">
                            <div class="col-sm-12">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="phone">Telefone:</label>
                                <input type="text" name="phone" id="phone" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="subject">Assunto:</label>
                                <input type="text" name="subject" id="subject" class="form-control form-control-sm" required>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="Message">Mensagem:</label>
                                <textarea name="Message" id="Message" class="form-control form-control-sm" rows="7" required></textarea>
                            </div>
                            <div class="col-sm-12 text-right">
                                <label class="invisible"></label>
                                <div class="g-recaptcha" data-sitekey="6LcF78YZAAAAAPwlwzjDzMGLVSXJAb_6eoCPjERB"></div>
                            </div>
                            <div class="col-sm-12 text-right mt-4">
                                <button class="g-recaptcha" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-100 text-center mt-4 p-2 text-light" style="background: rgba(0, 0, 0, 50%)">
                Copyright © Jimps <?php echo date('Y'); ?> - By Jimp
            </div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="fonts/fontawesome-free-5.12.1-web/js/all.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    $(window).ready(function() {
        function onSubmit(token) {
            document.getElementById("form").submit();
        }

        $('.divs').hover(function() {
            if ($(this).attr('id') == 'home') {
                $('#linkHome').addClass('text-light');
                $('#linkPortfolio').removeClass('text-light');
                $('#linkContato').removeClass('text-light');
            }

            if ($(this).attr('id') == 'portfolio') {
                $('#linkHome').removeClass('text-light');
                $('#linkPortfolio').addClass('text-light');
                $('#linkContato').removeClass('text-light');
            }

            if ($(this).attr('id') == 'contato') {
                $('#linkHome').removeClass('text-light');
                $('#linkPortfolio').removeClass('text-light');
                $('#linkContato').addClass('text-light');
            }
        });

        $('.list-group div a').click(function() {
            if ($(this).attr('id') == 'linkHome') {
                $('#linkHome').addClass('text-light');
                $('#linkPortfolio').removeClass('text-light');
                $('#linkContato').removeClass('text-light');
            }

            if ($(this).attr('id') == 'linkPortfolio') {
                $('#linkHome').removeClass('text-light');
                $('#linkPortfolio').addClass('text-light');
                $('#linkContato').removeClass('text-light');
            }

            if ($(this).attr('id') == 'linkContato') {
                $('#linkHome').removeClass('text-light');
                $('#linkPortfolio').removeClass('text-light');
                $('#linkContato').addClass('text-light');
            }
        });

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $('#portfolio-imgs div img').click(function() {
            var src = $(this).attr('src');
            $('#bigImage img').attr('src', src);
        });

        if (window.innerWidth < 768) {
            $(".navbar").hide();
        } else {
            $(".navbar").show();
        }
    });
</script>