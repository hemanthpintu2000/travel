<!DOCTYPE html>
<html lang="en">
<head>
<title>Travel Places</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Travel Places</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          category of places
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#adventure">adventure</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#historical">historical</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#About">About</a>
      </li>
    </ul> 
  </div>
</nav> 


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Dubare-Elephant-Camp-coorg-85078-pixahive-1.jpg" alt="Coorg">
          <h5>nature</h5>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bike-trip-ladakh.jpg" alt="Waynad">
          <h5>adventure</h5>          
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/hampi.jpg" alt="Chickmagalur">
          <h5>historical</h5>         
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">nature</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/Dubare-Elephant-Camp-coorg-85078-pixahive-1.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/waynad.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/chickmagalur.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="adventure">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">adventure</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/bike-trip-ladakh.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/river rafting.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/himalaya.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="historical">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">historical</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/hampi.jpg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/taj-mahal-1024x682.jpeg" class="img-fluid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/qutub minar.jpg" class="img-fluid pb-3">
    </div>
    </div>
    </div>
</section>
</a>

<a id="Contact">
<section class="my-4">
    <div class="py-4">
    <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">           
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">           
            </div>
            <div class="form-group">
                <label>mobile:</label>
                <input type="text" name="number" class="form-control">           
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>

<a id="About">
    <section class="my-4">
    <div class="py-4">
    <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">Traveller</h3> <br>
        <p class="text-center"><b>I am an expert travel blogger whos interested in exploring all types of places in india which makes you easy to choose places to travel at its best </b></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </section>
</a>
</body>
</html>
