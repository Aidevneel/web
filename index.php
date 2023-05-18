<?php require("components/global.php")?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/header_footer.css">
  <link rel="stylesheet" href="css/home.css">
  <title>Adroit Infosol</title>    
</head>
<body>

  <!-- header -->

  <?php require("components/iheader.php")?>

  <!-- Banner -->

  <div class="container">
    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">  
      <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="3000">
          <div class="row">   
              <div class="col-12 col-md-6 align-self-center order-last order-md-0">
                <h3 class="text-center text-md-start">Build Enterprise Solution</h3>
                <p class="text-center text-md-start">We are team of latented professionals to help you build your enterprise solution. We are team of latented professionals to help you build your enterprise solution</p>
              </div>
              <div class="col col-md-6 d-md-block">
                <img src="images/banner1.png" class="img-fluid bg-transparent">              
              </div>
            </div> 
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <div class="row">   
              <div class="col-12 col-md-6 align-self-center order-last order-md-0">
                <h3 class="text-center text-md-start">Build Enterprise Solution</h3>
                <p class="text-center text-md-start">We are team of latented professionals to help you build your enterprise solution. We are team of latented professionals to help you build your enterprise solution</p>
              </div>
              <div class="col col-md-6 d-md-block">
                <img src="images/banner1.png" class="img-fluid bg-transparent">              
              </div>
            </div> 
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <div class="row">   
              <div class="col-12 col-md-6 align-self-center order-last order-md-0">
                <h3 class="text-center text-md-start">Build Enterprise Solution</h3>
                <p class="text-center text-md-start">We are team of latented professionals to help you build your enterprise solution. We are team of latented professionals to help you build your enterprise solution</p>
              </div>
              <div class="col col-md-6 d-md-block">
                <img src="images/banner1.png" class="img-fluid bg-transparent">              
              </div>
            </div> 
        </div>
        
      </div>
    </div>
  </div>

  <!-- jumbotron -->

  <div class="jumbotron jumbotron-fluid text-white dark-color">
    <div class="container py-5">
      <h4 class="text-center"><?=$GLOBALS["COMPANY_NAME"]?></h4>
      <p class="fw-light" style="text-align: justify;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat veritatis dolor tempora similique,
        non provident temporibus molestias adipisci alias cum ad a unde officiis nesciunt impedit eum labore consequatur,
        dicta debitis eaque doloribus. Beatae rem facere modi impedit provident quos saepe earum, veniam illum consequatur voluptas iste,
        deleniti inventore ex minima, nihil odio porro deserunt? Laudantium, beatae. Est, excepturi saepe!
      </p>
      <a class="btn bg-transparent text-white border border-white" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
        Learn more 
      </a>
      <div class="collapse py-3" id="collapseExample">
        <p class="fw-light" style="text-align: justify;">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <p>
      </div>
    </div>
  </div>

  <!-- services -->

  <div class="container">
    <div class="row">
      <div class="col text-center text-decoration-underline py-2"><h3>Services</h3></div>
    </div>
    <div class="row">

      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>
      
      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>

      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>

      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>

      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>

      <div class="col-12 col-md-6 pb-4">
        <div class="row">
          <div class="col-1"><img src="images/media1.png" alt="" class="bg-transparent"></div>
          <div class="col-11"><h4 class="align-self-center pt-2 ms-4 ms-xl-2">User Interface Design</h4></div>
          <div class="col-12 p-0">
            <p class="me-5 ms-2 mb-0" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            At illo voluptas cumque nobis? Reiciendis officiis id eveniet, quam, blanditiis ut provident perspiciatis explicabo quae quo mollitia,
              exercitationem culpa illum in.</p>
              <a href="#" class="text-decoration-none ms-2 pt-0">Learn more</a>
            </div>
        </div>
      </div>

    </div>
  </div>

  <!-- portfolio -->

  <div class="container">
    <div class="row">
      <div class="col text-center text-decoration-underline py-2"><h3>Portfolio</h3></div>
    </div>

    <div class="row">

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>
      
      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

      <div class="col-9 col-md-4 col-xl-2 shadow-lg rounded-3 text-center m-5 ">
          <img class="img-fluid bg-transparent pt-2" alt="Card image cap" src="images/card.png">
          <h4>Hello</h4>
          <h6>Lorem ipsum dolor</h6>
      </div>

    </div>
  </div>

  <!-- jumbotron2 -->

  <div class="jumbotron jumbotron-fluid text-white dark-color">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 text-center">
          <h1>6+</h1>
          <h3>YEARS</h3>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
          <h1>150+</h1>
          <h3>APPS BUILD</h3>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
          <h1>7+</h1>
          <h3>COUNTRIES SERVED</h3>
        </div>
        <div class="col-12 col-sm-6 col-md-3 text-center">
          <h1>99%</h1>
          <h3>CLIENT SATISFACTION</h3>
        </div>
      </div>
    </div>
  </div>

  <h1>home</h1>
  <!-- footer --> 

  <?php require("components/footer.php")?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>