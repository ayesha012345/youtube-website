<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<?php include"menu.php";  ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active">0</li>
    <li data-target="#demo" data-slide-to="1">1</li>
    <li data-target="#demo" data-slide-to="2">2</li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      	<h3>Los Angeles</h3>
      	<p>we had a great time in La!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpeg" alt="Chicago" width="1100" height="500"><div class="carousel-caption">
      	<h3>Chicago</h3>
      	<p>Thank you, chicago!</p>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      	<h3>new york</h3>
      	<p>we love the big apple!</p>
    </div>
  </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
<section class="my-5">
  <div class="py-5">
	
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/img4.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="dispaly-4">Welcome to this website</h2>
			<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="about.php" class="btn btn-success">check More</a>
	</div>
	</div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Service</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="images/img5.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature!</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="images/img5.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature!</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="images/img5.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature!</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
  </div>
</div>

</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Gallery</h2>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-3">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="images/img1.jpeg" class="img-flauid pb-4">
    </div>
  </div>
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="POST">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
     
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
     
      <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
      </div>
      <button type="submit"  name="save" class="btn btn-success">Submit</a>
    </form>
  </div>
</section>
<footer >
  <p class="p-3 bg-dark text-white text-center">Copyright@Dynamic websites
  </p></footer>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>