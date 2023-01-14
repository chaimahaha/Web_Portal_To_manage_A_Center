<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" >
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap');
    </style>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style>
      .dropdown:hover .dropdown-menu{
        display: block;
      }
      .dropdown-menu{
        margin-top: 0;
      }
    </style>
  <script>
    $(document).ready(function(){
      $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  sticky-top " style="background-color:#EEEEEE;" >
  <div class="container-fluid" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"  style="color:#0d47a1"> 
            Présentation
          </a>  
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="theme"  style="color:#0d47a1"> 
            Théme de recherche
          </a>  
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pub"  style="color:#0d47a1"> 
            Publications
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" aria-current="page" href="prodcop"  style="color:#0d47a1">
            Production  et coopération
          </a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" aria-current="page" href="manif"  style="color:#0d47a1">
          Manifestation
          </a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" aria-current="page" href="actualites"  style="color:#0d47a1">
          Actualités
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" aria-current="page" href="membres"  style="color:#0d47a1">
          Membres
          </a>
        </li>
      </ul>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> S&apos;inscrire</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  
                    </a>

                    <div class="dropdown-menu  dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
    </div>
  </div>
  <div >
 </div>
  
</nav>
<div >
  <img src="img\chh.jpg" alt="" id="image" class="wow fadeInRight rounded" width="100%" height="150px">
</div>
  <div class="container mt-4">
            <div class="row">
              <div class="col">
                  <div class="title-classic">
                    <h2 class="wow fadeInLeft fs-1" style="font-family: math;">Présentation : </h2>
                    <p  style="font-style :italic; font-family: Georgia, serif; font-size: 16px; color:blue; text-align:justify;" >Systèmes intelligents pour l'ingénierie et la E-santé basés sur les Technologies de l'Image et des Télécommunications .</p>
                    <p class="wow fadeInLeft" style="font-family: Georgia, serif; text-align:justify; ">
                      Crée en Janvier 2004, l´unité de recherche SETIT trouve ses origines au sein du laboratoire de recherche LETI de l´école Nationale d´Ingénieur de Sfax ENIS. Depuis sa création, l´unité SETIT est rattachée à l´Institut Supérieur de Biotechnologie de Sfax ISBS. Les thèmes de recherches de l´Unité SETIT sont centrés autour de l´analyse, le traitement, la sécurisation (cryptage et tatouage) la compression,la transmission des images ainsi que l'interaction Homme Machine. Nous essayons d'aborder ces thématiques en mélangeant une approche mathématique fortement algorithmique et une approche pratique basée sur les outils informatiques. Nous essayons dans le cadre des travaux de SETIT de prendre en compte les préoccupations médicaleset industrielles dans le choix des objectifs stratégiques de l´unité. Nos travaux se regroupent de façon naturelle autour des grands thèmes tel que: la Segmentation, le Tatouage, la Compression, la Crypto-Compression et la transmission. Il est cependant très important de noter que ce découpage ne partitionne nullement l'ensemble des recherches que nous entreprenons ni les chercheurs de l´unité. Au contraire, la plupart des membres de l'unité sont impliqués dans plusieurs thèmes. Il s'agit là d'une volonté claire d'avoir un réel fonctionnement en équipe qui ne peut qu'aboutir à l'élargissement des compétences de chacun. Nos thématiques sont en effet à la fois ciblées, car centrées sur un petit nombre d'objets combinatoires classiques, et ambitieux. En effet nous voulons étudier et évaluer ces objets sous de nombreux angles, ce qui fait que seul un véritable travail d'équipe nous permet d'être réellement efficace. Toutefois, il est impératif de signaler que notre objectif n'est pas de concevoir des méthodologies fondamentales, mais plutôt de rechercher les outils théoriques les mieux appropriés aux problèmes concrets posés par les "traiteurs de l´imagerie". Notre démarche relève donc d'une activité de recherche appliquée en développant différents outils, soit par nous-mêmes (comme les méthodes de tatouage et de crypto-compression), soit en évaluant les techniques existantes afin de pouvoir et les comprendre et les améliorer (comme la segmentation par les approches contour et région)et soit en appliquant notre savoir faire dans des thématiques diverses de la vie courante: médicale (Classification des mélanomes, détection des microcalcifications, ostéoporose, élaboration de système d´archivage et de transmission d´images médicales) et industrielle (contrأ´le de qualité, Télévidéo-surveillance, Sécurité de transmission..). Globalement, les compétences fondamentales requises touchent un grand nombre de secteurs relevant d'une part du traitement d'image et d'autre part du domaine médical et industriel. A toute fin utile nous signalons que le tatouage des images et la crypto-compression constituent deux axes dans lesquels nous nous distinguons à l´échelle mondiale par l´élaboration de nouvelles approches. D´ailleurs nous sommes les premiers en Tunisie à les traiter. A ce titre nous avons Plusieurs Brevets.</span></p>
                  </div>
              </div>
            </div>
  </div>

 <!-- Footer -->
 <footer class="text-center text-lg-start  text-muted mt-5" style="background-color:#EEEEEE;" id="footer">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block" style="color:#0d47a1">
        <span>Connectez-vous avec nous sur nos réseaux sociaux:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="https://www.facebook.com/profile.php?id=100064651552198" class="me-4 text-reset" target="_blank">
          <i class="fa fa-facebook-square"></i>
        </a>
        <a href="http://www.setit.rnu.tn/URSETIT/" class="me-4 text-reset" target="_blank">
          <i class="fa fa-google"></i>
        </a>
        
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
  
          <!-- Grid column -->
          <div class="m-4  mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4" style="color:#0d47a1">
              Contact
            </h6>
            <p style="color:#0d47a1"><i class="bi bi-house-door" ></i>   Pour contacter le Directeur de l'unité Mr. Mohamed Salim BOUHLEL :</p>
            <p style="color:#0d47a1">
            <i class="bi bi-envelope"></i> 
                E-mail : medsalim.bouhlel@enis.rnu.tn
            </p>
            <p style="color:#0d47a1"><i class="bi bi-telephone-inbound"></i> Tel : +216 74 674 354</p>
            <p style="color:#0d47a1"><i class="bi bi-newspaper"></i>   Fax : +216 74 674 364</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05); color:#0d47a1;" >
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="">SETIT </a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</body>
</html>
