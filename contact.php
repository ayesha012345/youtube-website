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
</body>
</html>