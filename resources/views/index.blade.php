<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/f96946d142.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>
<body>

  <!-- NAVBAR -->

  <div class="container-fluid grey">
    <nav id="navbar-id" class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="/" class="navbar-brand"><img id='logo' src="https://upload.wikimedia.org/wikipedia/commons/5/53/Wikimedia-logo.png" alt=""></a>
        
        <!-- NAVBAR TOGGLER -->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar01" aria-controls="navbar01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar01">
          <ul class="navbar-nav">
            <li id="padding-l" class="nav-item li-pad">
              <a href="/producten" class="nav-link"><i class="fa-solid fa-bag-shopping"></i>Producten</a>
            </li>
            <li class="nav-item li-pad">
              <a href="#" class="nav-link"><i class="fa-solid fa-piggy-bank"></i>Aanbiedingen</a>
            </li>
            <li class="nav-item li-pad">
              <a href="#" class="nav-link"><i class="fa-solid fa-cart-shopping"></i>Winkelwagen</a>
            </li>
            <li class="nav-item li-pad">
              <a href="#" class="nav-link"><i class="fa-solid fa-truck"></i>Bestellen</a>
            </li>
            <li class="nav-item d-block d-lg-none d-xl-none">
              <a href="#" class="nav-link"><i class="fa-solid fa-circle-user drop-account"></i>Account</a>
            </li>
          </ul>
        </div>
        <a href="#" class="nav-link d-none d-lg-block account"><i class="fa-solid fa-circle-user"></i>Account</a>
      </div>
    </nav>

    <!-- SEARCH BAR -->

    <form class="d-flex navbar-search" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="submit">Search</button>
    </form>

    <!-- MAIN DEAL -->
    
    <div id='top-deal' class="">
      <div id="banner">
      <div id="top-txt" class="">
        <h1>Kop huidige aanbiedingsactie</h1>
        <h3>Subkop huidige aanbiedingsactie</h3>
        <button class="btn btn-light">Bekijk aanbieding</button>
      </div> 
      <div class="">
        <!-- <img src="https://img.freepik.com/free-vector/shopping-time-banner-with-realistic-map-cart-gift-bags-vector-illustration_548887-120.jpg?w=2000" alt=""> -->
      </div>
      </div>
      
      <!-- 3/1 ROW DEAL -->

     <div id="bot-deal" class="row">

      <div  class="col-md-6 col-lg-2 deal">
        <h2>Willekeurig aanbiedingsproduct</h2> <br>
        <h3>Korte omschrijvingstekst Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3> <br>
          <button class="btn btn-light bot-deal-btn">Bekijk</button>
      </div>
      <div id="deal" class="col-md-6 col-lg-2 deal">
        <img src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg" alt="">
        <h4 class="prijs">Prijs</h4>
      </div>

      <div  class="col-md-6 col-lg-2 deal">
        <h2>Willekeurig aanbiedingsproduct</h2> <br>
        <h3>Korte omschrijvingstekst 
          Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit</h3> <br>
          <button class="btn btn-light bot-deal-btn">Bekijk</button>
      </div>
      <div  class="col-md-6 col-lg-2 deal">
        <img src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg" alt="">
        <h4 class="prijs">Prijs</h4>
      </div>

      <div class="col-md-6 col-lg-2 deal">
        <h2>Willekeurig aanbiedingsproduct</h2> <br>
        <h3>Korte omschrijvingstekst 
          Lorem ipsum dolor sit amet, 
          consectetur adipiscing elit</h3> <br>
          <button class="btn btn-light bot-deal-btn">Bekijk</button>
      </div>
      <div class="col-md-6 col-lg-2 deal">
        <img src="https://complianz.io/wp-content/uploads/2019/03/placeholder-300x202.jpg" alt="">
        <h4 class="prijs">Prijs</h4>
      </div>

    </div>
    
    <!-- NEWS SEC -->

    <div class="news-sec">
      <div class="news-banner">
        <div class="news-text">
          <h1>Kop nieuwsbericht</h1>
          <h3>Korte tekst nieuwsbericht</h3>
          <button class="btn btn-light">Hyperlink naar volledige tekst</button>
        </div>
      </div>
  </div>

  <!-- FOOTER -->
  
  <footer>
      <div class="row footer">
          <div class="col-lg-4 col-md-6 col-sm-6">
              <h3 class="footer-txt text-left">Social media</h3>
              <ul class="soc-media">
                  <li>
                   <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                  </li>
                  <li>
                   <a href="#"><i class="fa-brands fa-twitter"></i></a>    
                  </li>
                  <li>
                   <a href="#"><i class="fa-brands fa-facebook"></i></a>
                  </li>
              </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
              <h3 class="footer-txt text-left">Contact
              </h3>
              <ul>
                  <li>
                   <a href="#">E-mail</a>
                  </li>
                  <li>
                   <a href="#">Live chat</a>    
                  </li>
                  <li>
                   0640323255
                  </li>
              </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 footer-news">
              <h3 class="footer-txt text-left">Nieuwsbrief</h3>
              <input type="text" placeholder="E-mail">
              <button class="btn btn-light">Aanmelden</button>
          </div>
      </div>
      <div class="botf-div">
          <ul class="bot-footer text-center">
              <li><a href="#"><span class="nowrap">Algemene voorwaarden</span></a></li>
              <li><a href="#"><span class="nowrap">Levering & verzending</span></a></li>
              <li><a href="#"><span class="nowrap">Privacybeleid</span></a></li>
              <li><a href="#"><span class="nowrap">Onze organisatie</span></a></li>
          </ul>
      </div>
  </footer>
</body>
</html>