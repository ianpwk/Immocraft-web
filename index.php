<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Immocraft</title>
<!-- Favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="//favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/site.webmanifest">
<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="img/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="msapplication-config" content="img/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/google-sans/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="awesome/all.css">
  <style type="text/css">body{font-family: 'Google Sans' !important;}</style>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/font-icon.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav class="white" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo grey-text text-darken-3"><?php echo file_get_contents("logo.svg"); ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="members.php" class="  grey-text text-darken-2">Member</a></li>
        <li><a href="maps.php" class="  grey-text text-darken-2">Map</a></li>
        <li><a href="https://discord.gg/bjgS7x5" target="_blank" class="grey-text text-darken-2"><i class="fab fa-discord"></i></a></li>
        <li><a href="https://instagram.com/immocraft" target="_blank" class="grey-text text-darken-2"><i class="fab fa-instagram"></i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
               <li><a href="members.php" class="  grey-text text-darken-2">Member</a></li>
        <li><a href="maps.php" class="  grey-text text-darken-2">Map</a></li>
        <li><a href="https://discord.gg/bjgS7x5" target="_blank" class="grey-text text-darken-2"><i class="fab fa-discord"></i>Discord</a></li>
        <li><a href="https://instagram.com/immocraft" target="_blank" class="grey-text text-darken-2"><i class="fab fa-instagram"></i>Instagram</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger grey-text text-darken-3"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="warning grey text-lighten-2"><h6>This Website in Development, Go to <a href="https://github.com/ianpwk/Immocraft-web" class="black-text" style="font-weight: 500;">Github</a> for Souce Code</h6></div>
     <div class="warning blue text-lighten-4"><h6>Discount 10% in <a href="http://anjay.id" class="black-text" style="font-weight: 500;">AnjayHosting</a> Server using cupon code "IMMOCRAFT" or "IMMO"</h6></div>
    <div class="container">
  
     <h4>New Video</h4>  
   <!-- Modal Structure -->
  <div id="filter" class="modal bottom-sheet">
    <div class="modal-content">
       <p>
        <h4>Immocraft Series</h4>
      <label>
        <input type="checkbox" class="filled-in" />
        <span>Season 1</span>
      </label>
       <label>
        <input type="checkbox" class="filled-in" />
        <span>Season 2</span>
      </label>
       <label>
        <input type="checkbox" class="filled-in" />
        <span>Season 3</span>
      </label>
    </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>


     <div class="row">
    <div class="">
      <div class="card">
        <div class="card-image shadows-video">
          <img src="https://i.ytimg.com/vi/phREYOUSp38/maxresdefault.jpg" style="opacity: 0.8;">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content chn-information">
        <img src="https://yt3.ggpht.com/a-/AAuE7mBTWX-fXfJYaA3RRJq5SlLf5JoNIBhzNNQIgw=s900-mo-c-c0xffffffff-rj-k-no" class="circle z-depth-1">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content red-text"><i class="fab fa-youtube"></i></a>
      <a href="#!" class="secondary-content red-text"><i class="immo-gamely"></i></a>
        </div>
      </div>
    </div>
  </div>
    </div>


  <a class="btn-floating btn-large red fly modal-trigger" href="#filter">
   <i class="fas fa-filter"></i>
  </a>
  
      

  <footer class="page-footer orange">
  
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#modal').modal();
    $('#beta-dev').modal('open'); 
 });
</script>
  </body>
</html>
