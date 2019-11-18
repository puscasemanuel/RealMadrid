<?php

$db = mysqli_connect("localhost", "root", "", "aplicatie");


?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>FC Cavnic</title>
</head>
<body>

  <?php

  include 'navbar.php';

  ?>


  <!-- jucatori -->
  <section id="jucatori" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-white pt-5">
              Atacanți
            </h1>
            <p class="lead pb-3">

            </p>
          </div>
        </div>
      </div>





      <div class="row mb-4">

      <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="http://3.bp.blogspot.com/-v9MtVxgVeDE/WAVyVonow9I/AAAAAAAA4VE/UwgoZ4OmuUoDyl6bhwQ7rgComz4nzadmACHM/s1600/gareth-bale-performance-data-1617-transfermarkt.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Gareth Bale</h4>
                </div>
              </a>
            </div>
          </div>
      


      <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/18922-1544774342.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Benzema</h4>
                </div>
              </a>
            </div>
          </div>


          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://www.transfermarkt.co.uk/images/portrait/originals/8198-1515761767.jpg?lm=1515761786" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Cristiano Ronaldo</h4>
                </div>
              </a>
            </div>
          </div>



      </div>
    </div><!-- container-->
  </section>



  <!-- mijlocasi -->

  <section id="mijlocas" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-white pt-5">
              Mijlocași
            </h1>
            <p class="lead pb-3">

            </p>
          </div>
        </div>
      </div>



      <div class="row mb-4">

        
      <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/31909-1519743952.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Toni Kros</h4>
                </div>
              </a>
            </div>
          </div>


          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net//images/portrait/originals/27992-1413206775.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Luka Modric</h4>
                </div>
              </a>
            </div>
          </div>


          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/85288-1523366774.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Isco</h4>
                </div>
              </a>
            </div>
          </div>

      </div>
    </div><!-- container-->
  </section>


  <!-- aparatori -->

  <section id="aparator" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-white pt-5">
              Apărători
            </h1>
            <p class="lead pb-3">

            </p>
          </div>
        </div>
      </div>
      <div class="row mb-4">
          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/44501-1413206117.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Marcelo Viera</h4>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/164770-1413206196.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Rapahel Varane</h4>
                </div>
              </a>
            </div>
          </div>


          <div class="col-md-4" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/25557-1413190249.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Sergio Ramos</h4>
                </div>
              </a>
            </div>
          </div>



      </div>
    </div><!-- container-->
  </section>


  <!-- portari -->



  <section id="portar" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-white pt-5">
              Portari
            </h1>
            <p class="lead pb-3">

            </p>
          </div>
        </div>
      </div>
      <div class="row mb-4">


      <div class="col-md-6" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/108390-1534173989.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Thibaut Courtois</h4>
                </div>
              </a>
            </div>
          </div>

          <div class="col-md-6" style="margin-bottom: 50px;">
            <div class="card">
              <a href="#">
                <div class="card-body">
                  <img src="https://tmssl.akamaized.net/images/portrait/originals/120629-1447254969.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
                  <h4>Alphonse Areola</h4>
                </div>
              </a>
            </div>
          </div>
        

      </div>
    </div><!-- container-->
  </section>


  <?php
  include 'footer.php';
  ?>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });
</script>
</body>
</html>
