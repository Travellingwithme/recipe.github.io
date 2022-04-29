<!DOCTYPE html>
<html lang="en">
<head>
  <title>RW Interior's</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--- css---->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <!-----vendor------>
  
  <link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css');?>" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/image/nature-logo.png');?>" alt="logo" style="width:40px;" class="rounded-pill">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/Welcome/index');?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/Welcome/portfolio');?>">Portfolio</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/Welcome/contact');?>">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>



</body>
</html>


