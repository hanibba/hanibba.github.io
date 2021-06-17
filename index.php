<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Espace Informatique</title>
    <link rel="icon" href="image/logo-web.png" type="image/gif" sizes="64x64">
    <style>
      #Search {
        width: auto;
      }
      .badge{
        color: white;
      }
      #box-social img:hover {
    animation-name: rotate-in-diag-2;
    animation-duration: 3s;
      }
      #main{
        animation-name: slide-in-elliptic-top-fwd;
    animation-duration: 3s;
      }
      @-webkit-keyframes slide-in-elliptic-top-fwd{0%{-webkit-transform:translateY(-600px) rotateX(-30deg) scale(0);transform:translateY(-600px) rotateX(-30deg) scale(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;opacity:0}100%{-webkit-transform:translateY(0) rotateX(0) scale(1);transform:translateY(0) rotateX(0) scale(1);-webkit-transform-origin:50% 1400px;transform-origin:50% 1400px;opacity:1}}@keyframes slide-in-elliptic-top-fwd{0%{-webkit-transform:translateY(-600px) rotateX(-30deg) scale(0);transform:translateY(-600px) rotateX(-30deg) scale(0);-webkit-transform-origin:50% 100%;transform-origin:50% 100%;opacity:0}100%{-webkit-transform:translateY(0) rotateX(0) scale(1);transform:translateY(0) rotateX(0) scale(1);-webkit-transform-origin:50% 1400px;transform-origin:50% 1400px;opacity:1}}      @-webkit-keyframes rotate-in-diag-2{0%{-webkit-transform:rotate3d(-1,1,0,-360deg);transform:rotate3d(-1,1,0,-360deg);opacity:0}100%{-webkit-transform:rotate3d(-1,1,0,0deg);transform:rotate3d(-1,1,0,0deg);opacity:1}}@keyframes rotate-in-diag-2{0%{-webkit-transform:rotate3d(-1,1,0,-360deg);transform:rotate3d(-1,1,0,-360deg);opacity:0}100%{-webkit-transform:rotate3d(-1,1,0,0deg);transform:rotate3d(-1,1,0,0deg);opacity:1}}
    </style>
    
</head>
<body>
  <header>
    <nav class="navbar  navbar-light bg-light shadow p-3 " style="background-color: #e3f2fd;">
        <div class="container">
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight"><img src="image/logo/telephone.svg" style="line-height: 50px;"> 0698243389
                </div>
                <div class="p-2 bd-highlight"><img src="image/logo/mail.svg" style="line-height: 50px;">
                    touati.hani@univ-bba.dz</div>
            </div>
            <?php 
            session_start();
            if (isset($_SESSION['admin'])||isset($_SESSION['test_login'])) {
              echo'<form method="post"><div class="p-2 bd-highlight"><button type="submit" name="close" class="btn btn-outline-danger" >Se déconnecter</button>
              
              </div> 
              </form>';
              
          }else{
            echo'
              <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight"><img src="image/logo/person.svg"><a href="login.php"> Se connecter</a>
              </div>
              </div>';
          }
          if (isset($_POST['close'])) {
            session_destroy();
            header('Refresh: 1; login.php' );
          }
            ?>


        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light shadow p-3 "  >
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="image/logo-web.png" width="90px" height="90px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
    <div class="btn-group dropend">
  <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">CATEGORIE</button>
  <ul class="dropdown-menu d-grid gap-2">
    <form action="" method="post">
   <li><button type="submit" class="btn  mb-2"style="width: 100%" name="1">COMPOSANTS PC</button></li>
   <li><button type="submit"  class="btn mb-2" style="width: 100%"name="2" >PC PORTABLE  TABLETTE  TELEPHON</button></li>
   <li><button type="submit"  class="btn mb-2" style="width: 100%" name="3">PÉRIPHÉRIQUE PC</button></li>
   <li><button type="submit"  class="btn mb-2" style="width: 100%"name="4" >AUTRE CHOSE</button></li>
   </form>
  </ul>
   </div>
        <a class="nav-link" href="#footer"style="width: 200px;color: black;">QUI SOMMES-NOUS?</a>
        <a class="nav-link" href="#footer" style="width: 200px; color: black;">CONTACTEZ-NOUS</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: none;width: 80px;background-color: transparent;color: black; outline: none;"><span class="badge bg-danger"><?php include 'connect_db.php'; 
      if (isset($_SESSION['test_login'])) {
       
      
      $nome_login=$_SESSION['test_login'];
        $row_cmd=$connect_db->prepare("SELECT *FROM commende WHERE email_lacheteur='$nome_login'");
        $row_cmd->execute();
        echo  $row_cmd->rowCount();}
        ?></span><img src="image/Panier.png" alt="">
  </button>
    </div>
    
  </div>
  <div class="container-fluid" >
  <form class="d-flex" method="post">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cle-search">
      <button class="btn btn-outline-success" type="submit" name="search" id="Search">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" id="height">
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="image/slide1.jpg" class="d-block w-100 "  style="height: 300px">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="image/slide2.jpg" class="d-block w-100" style="height: 300px">
    </div>
    <div class="carousel-item">
      <img src="image/slide3.jpg" class="d-block w-100" style="height: 300px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden slide "></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="slide ">
    <span class="carousel-control-next-icon" aria-hidden="true" ></span>
    <span class="visually-hidden slide " ></span>
  </button>
</div>

</header>
<main class="container shadow p-3" id="main">
  <?php
    
   
  include 'connect_db.php';
  if (isset($_POST['search'])) {
    $cle=$_POST['cle-search'];
    $produit_serche=$connect_db->prepare("SELECT *FROM produit WHERE Nome_produit LIKE '%$cle%' ");
    $produit_serche->execute();
    foreach($produit_serche AS $valu){
      $nome=$valu['Nome_produit'];
      $id=$valu['ID_produit'];
      $img_prod='dashboard/'.$valu['image_produit'];
      echo'
      <div class="card" style="width: 18rem;">
      <img src='.$img_prod.' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$nome.'</h5>
      </div>
      <form method="post">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
      
    </div>
    ';
    }
  
  
  
  }elseif(isset($_POST['1'])){
    $categorie1=$connect_db->prepare("SELECT *FROM produit WHERE categorie='COMPOSANTS PC' ");
    $categorie1->execute();
    foreach($categorie1 AS $valu){
      $nome=$valu['Nome_produit'];
      $id=$valu['ID_produit'];
      $img_prod='dashboard/'.$valu['image_produit'];
      echo'
      <div class="card" style="width: 18rem;">
      <img src='.$img_prod.' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$nome.'</h5>
      </div>
      <form method="post">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
      
    </div>
    ';
    }
    

  }elseif(isset($_POST['2'])){
    $categorie2=$connect_db->prepare("SELECT *FROM produit WHERE categorie='PC PORTABLE | TABLETTE| TELEPHON' ");
    $categorie2->execute();
    foreach($categorie2 AS $valu){
      $nome=$valu['Nome_produit'];
      $id=$valu['ID_produit'];
      $img_prod='dashboard/'.$valu['image_produit'];
      echo'
      <div class="card" style="width: 18rem;">
      <img src='.$img_prod.' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$nome.'</h5>
      </div>
      <form method="post">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
      
    </div>
    ';}
  }elseif(isset($_POST['3'])){
    $categorie3=$connect_db->prepare("SELECT *FROM produit WHERE categorie='PERIPHERIQUE PC' ");
    $categorie3->execute();
    foreach($categorie3 AS $valu){
      $nome=$valu['Nome_produit'];
      $id=$valu['ID_produit'];
      $img_prod='dashboard/'.$valu['image_produit'];
      echo'
      <div class="card" style="width: 18rem;">
      <img src='.$img_prod.' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$nome.'</h5>
      </div>
      <form method="post">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
      
    </div>
    ';}
    
  }elseif(isset($_POST['4'])){
    $categorie4=$connect_db->prepare("SELECT *FROM produit WHERE categorie='autre chose' ");
    $categorie4->execute();
    foreach($categorie4 AS $valu){
      $nome=$valu['Nome_produit'];
      $id=$valu['ID_produit'];
      $img_prod='dashboard/'.$valu['image_produit'];
      echo'
      <div class="card" style="width: 18rem;">
      <img src='.$img_prod.' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$nome.'</h5>
      </div>
      <form method="post">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"  name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
      
    </div>
    ';}
  }
  else{
  $tout_produit=$connect_db->prepare("SELECT *FROM produit WHERE quantite>'0'");
  $tout_produit->execute();
  foreach($tout_produit AS $valu){
    $nome=$valu['Nome_produit'];
    $categorie=$valu['categorie'];
    $prix=$valu['prixe'];
    $id=$valu['ID_produit'];
    $_SESSION['id-produit-plus-info']=$valu['ID_produit'];
    $description=$valu['description'];
    $img_prod='dashboard/'.$valu['image_produit'];
    echo'
    <div class="card" style="width: 18rem;">
    <img src='.$img_prod.' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$nome.'</h5>
    </div>
    <form method="post">
    <button type="submit" class="btn btn-primary" name="id-produit" value='.$id.'>LIRE LA SUITE</button></form>
    </div>';
  }
  }
  if (isset($_POST['id-produit'])) {
    $_SESSION['id-produit']=$_POST['id-produit'];
    echo"<script>
    location = 'get-prod.php';
    </script>";
  }
  ?>
</main>

<footer id="footer">

    <div class="container-fluid mb-1">
    <div class="row mt-5 shadow p-3  bg-body rounded">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10845.813541560916!2d4.751095847551934!3d36.081793855304475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128cbdd8ce6fb543%3A0x1294070e73896f66!2sBordj%20Bou%20Arreridj!5e0!3m2!1sfr!2sdz!4v1622817054629!5m2!1sfr!2sdz" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </div>
    
    <div class="container-fluid mb-1">
    <div class="row" style="background-color:#f8f9fa ;height: auto;">
        <div class="col-6 col-lg-3 offset-lg-1 mt-5">
            <h5 class="mb-3">QUI SOMMES-NOUS? </h5>
            <span>Espace Informatique est spécialisé dans la vente de matériel informatique en Algerie de tout type  : PC portable, imprimante, ordinateur de bureau, PC gamer, composant informatique, modem et routeur wifi, périphérique pc.</span>
        </div>
    
        
    
        <div class="col-6 col-lg-3 offset-lg-1 mt-5" id="box-social">
            <h5 class="mb-3">NOUS SUIVRE</h5>
            <span class="ml-1 mr-1"><a href="https://facebook.com/"><img src="image/logo/facebook.png" ></a></span>
            <span class="ml-1 mr-1"><a href="https://www.instagram.com/"><img src="image/logo/Instagram.png" ></a></span>
            <span class="ml-1 mr-1"><a href="https://twitter.com/"><img src="image/logo/twitter.png" ></a></span>
        </div>
    
        <div class="col-6 col-lg-3 offset-lg-1 mt-5 ml-3">
        <h5 >Contace Me </h5>
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
            <input type="text" name="name_persone" class="form-control" placeholder="NAME">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <input type="submit" value="Send" name="send" class=" btn btn-info" style="width: 180px;">
          </div>
        </form>
        </div>
    </div>
    </div>
    
    <?php
      if (isset($_POST['send'])) {
        $email = $_POST['email'];
        $name = $_POST['name_persone'];
        $text = $_POST['text'];
    
        require_once 'mail.php';
        $mail->setFrom('touati.hani34@gmail.com');
        $mail->addAddress('touati.hani34@gmail.com');
        $mail->Subject = 'inbox from website';
        $res = "from :$email.<br>.$text";
        $mail->Body = $res;
        $mail->send();
      } 
    ?>
    </footer>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Liste d'achat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nom Produit</th>
              <th scope="col">Quantite</th>
              <th scope="col">Prix</th>         
            </tr>
          </thead>
          <tbody>
            <tr>
        <?php
        if (isset($_SESSION['test_login'])) {
          # code...
        
         $nome_login=$_SESSION['test_login'];
          $liste_comonde=$connect_db->prepare("SELECT *FROM commende WHERE email_lacheteur='$nome_login'");
          $liste_comonde->execute();

          $cpt=0;
          foreach($liste_comonde AS $valu){
            $nom_prod=$valu['nome_prod'];
            $liste_produit=$connect_db->prepare("SELECT *FROM produit WHERE Nome_produit='$nom_prod'");
            $liste_produit->execute();
            foreach($liste_produit AS $value){
              $prix=$value['prixe'];
            }
            
            $quantite_comnder=$valu['quantite_comnder'];
            echo'
            <td>'.$nom_prod.'</td>
            <td>'.$quantite_comnder.'</td>
            <td>'.$prix*$quantite_comnder.'</td>
            </tr>
            ';$cpt=$cpt+$prix*$quantite_comnder; }
            echo'          <tr>
            <tr><td>Total Prix</td><td>'.$cpt.'</td></tr></tbody></table>';
          }
          ?>
           
      
        </div>
       

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  















    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script> -->

</body>

</html>