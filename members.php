<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Immocraft - Hemitcraft, but Indonesian</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/google-sans/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="awesome/all.css">
  <style type="text/css">body{font-family: 'Google Sans' !important;}</style>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo grey-text text-darken-3"><?php echo file_get_contents("logo.svg"); ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="  grey-text text-darken-2">Member</a></li>
        <li><a href="#" class="  grey-text text-darken-2">Map</a></li>
        <li><a href="https://discord.gg/bjgS7x5" target="_blank" class="grey-text text-darken-2"><i class="fab fa-discord"></i></a></li>
        <li><a href="https://instagram.com/immocraft" target="_blank" class="grey-text text-darken-2"><i class="fab fa-instagram"></i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#" class="  grey-text text-darken-2">Member</a></li>
        <li><a href="#" class="  grey-text text-darken-2">Map</a></li>
        <li><a href="https://discord.gg/bjgS7x5" target="_blank" class="grey-text text-darken-2"><i class="fab fa-discord"></i>Discord</a></li>
        <li><a href="https://instagram.com/immocraft" class="grey-text text-darken-2"><i class="fab fa-instagram"></i> Instagram</a></li>

      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger grey-text text-darken-3"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
     <br><br>
     <h3>New Video</h3>  <a class="waves-effect waves-light grey lighten-3 grey-text text-darken-4 btn modal-trigger btn-round z-depth-0" href="#filter">Filter</a><br>


    </div>
  </div>


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

  <div class="container">
    <div class="section">

     <div class="row">
    <div class="">
      <div class="card">
        <div class="card-image shadows-video">
          <img src="https://i.ytimg.com/vi/phREYOUSp38/maxresdefault.jpg" style="opacity: 0.8;">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <img src="https://yt3.ggpht.com/a-/AAuE7mBTWX-fXfJYaA3RRJq5SlLf5JoNIBhzNNQIgw=s900-mo-c-c0xffffffff-rj-k-no" class="profile-pic circle"><a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>

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

  </body>
</html>
