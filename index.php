<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt-BR">
    <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos Customizados -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Font-Awessome -->
    <link rel="stylesheet" href="css/font-awessome.css">
    <!-- Referencias de Javascript -->

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>É Só Doar</title>

  </head>
  
  <body class="hidden-overflow">
    <!-- Fundo do Site. -->
    <div class="bg-1"></div>
    <div class="bg-2"></div>
    <div class="bg-3"></div>

    <!-- Navegação -->
    <header id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbrand" href="./">
                    <img src="img/Logo/logo-cabecalho.png" style="height: 45px;" align="right" class="img-fluid gradient-mask">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#home-nav" aria-controls="home-nav" aria-expanded="false" aria-label="Abrir Menu">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="home-nav">
                    <ul class="navbar-nav text-sm-left ml-auto">
                        <li class="nav-item text-center">
                            <a onclick="setNewUser(false)" href="../index.php?page=login" class="btn align-middle btn-outline-primary my-2 my-lg-0">
                                Entrar
                            </a>    
                        </li>

                        <li class="nav-item text-center">
                            <a onclick="setNewUser(false)" href="../index.php?page=register&action=register" class="btn align-middle btn-primary my-2 my-lg-0">
                                Cadastrar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texto Inicial -->
                <div class="col-12 col-md-5">
                            <h1 class="text-3">Melhor Site de Doações do Espírito Santo.</h1>
                            <p class="text-muted">Procure e realize doações ná sua área, filtrando por categorias como <b>móveis, animais e mantimentos.</b></p>
                            <p>
                                <a onclick="setNewUser(false)" href="../" class="btn btn-xl btn-primary btn-inicie-agora">
                                    Inicie Agora
                                </a>
                            </p>
                </div>
                
                <!-- Video ou ScreenShot de Demonstração -->
                <div class="col-12 col-md-7 my-3 my-md-lg">
                    <div>
                        <div class="video cast-shadow">
                            <img src="img/sitio-screenshoot.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <div class="section" id="patrocinadores">
        <div class="container">
            <div class="logos-patrocinadores text-center">
                <p class="title-font">
                    EMPRESAS QUE APOIAM O SITE
                </p>
                <img src="img/patrocinadores/logo-fabra.png" alt="Logo Fabra">
                <img src="img/patrocinadores/logo-panthro.png" alt="Logo Panthro">
                <img src="img/patrocinadores/logo-fabiano.png" alt="Logo Fabiano">
                <img src="img/patrocinadores/1-quem-e-jorge.png" alt="logo patrocinio">

            </div>
        </div>
    </div>

<?php /*
    <!-- Sobre o Software -->
    <section id="sobre">
        <header class="bg-secondary text-center py-5 mb-4">
            <div class="container">
                <h1 class="font-weight-light">Sobre o SoDoar.com</h1>
            </div>
        </header>
        <div class="container bg-secondary-solid col-md-12">
            <div class="col-md-3">
                <p>algo</p>
            </div>
            <div class="col-md-9">
                <p>oOutro Algo</p>
            </div>
        </div>
    </section>

    <section id="finalidade">
    
    </section>

    <!-- Conheça o Time -->
    <section>
        <header class="bg-primary text-center py-5 mb-4">
            <div class="container">
                <h1 class="font-weight-light text-white">Conheça a Equipe</h1>
                <p style="color:#FFF">(São Pessoa fictícias)</p>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <!-- Membro 1 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Joaquino dos Anjos</h5>
                        <div class="card-text text-black-50">Desenvolvedor Web</div>
                    </div>
                    </div>
                </div>
                <!-- Membro 2 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Anitta das Trapaças</h5>
                        <div class="card-text text-black-50">Lider de Marketing</div>
                    </div>
                    </div>
                </div>
                <!-- Membro 3 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Aquiles Monstro das Neves</h5>
                        <div class="card-text text-black-50">Balarino</div>
                    </div>
                    </div>
                </div>
                <!-- Membro 4 -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow">
                    <img src="https://source.unsplash.com/ZI6p3i9SbVU/500x350" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">Maria Mãe de Santo</h5>
                        <div class="card-text text-black-50">Coreografista</div>
                    </div>
                    </div>
                </div>
            </div>
    </section>
*/ ?>
    <footer class="footer">
        <div class="container bottom_border">
            <div class="container">
                <ul class="menu-footer text-center">
                <li><a href="#home">Inicio</a></li>
                <!-- <li><a href="">Sobre</a></li>
                <li><a href="">Outros Serviços</a></li> -->
                <!-- <li><a href="">Contato</a></li> -->
                </ul>
                
                <!-- Copyright -->
                <p class="text-center">Copyright @2019 | Desenvolvido pela equipe SoDoar.com
                </p>
            </div>
        </div>
    </footer>

<script>

$(document).ready(function() {
    checkCookie(); //Verifica se é um novo usuário
});

function createCookie(cName, cValue, cExpDay){
  var d = new Date();
  d.setTime(d.getTime() + (cExpDay*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function setNewUser(isNewUser){
    createCookie("isNewVisitor", isNewUser, 1);
}

function checkCookie() {
  var isNewVisitor = getCookie("isNewVisitor");

  if (isNewVisitor == "false") {
    window.location.replace("../");
  }
  if(isNewVisitor == "" || isNewVisitor == null || isNewVisitor == "true") {
    createCookie("isNewVisitor", true, 1);
  }

}
</script>

  </body>
</html>
