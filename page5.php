<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-transparent.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Drive</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

 
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-tEBXN9vrHN" once="menu" id="menu2-l">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="assets/images/logo-transparent.png" alt="" style="height: 3rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-7"href=index.php>ToL<br></a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="page2.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="page3.php">Contacts</a>
                    </li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-black display-4" href="page1.php">Go to Projects</a> <a class="btn btn-black display-4" href="page5.php">Go to Drive</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="content6 cid-tEEeeTweMU" id="content6-m">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <hr class="line">
                <p class="mbr-text align-center mbr-fonts-style my-4 display-5">Theo's drive V2.2(Beta)</p>
                <hr class="line">
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content11 cid-tEEefTOWut" id="content11-n">
  </body>
</html>


<style>
    
    .center-container {
      display: flex;
      justify-content: center;
      align-items: flex-start; 
      height: 15vh;
    }
    .center-container .btn {
      margin: 0 10px;
    }
    .custom-file-input {
      display: none;
    }
    .custom-file-label {
      display: inline-block;
      background-color: #007bff;
      color: #fff;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 4px;
    }
    .upload-btn {
      padding: 10px 15px;
    }
    form {
      display: flex;
    }
  </style>
</head>
<body>
  <div class="center-container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label for="fileInput" class="custom-file-label btn btn-primary display-4">Choose File</label>
      <input type="file" name="file" id="fileInput" class="custom-file-input">
      <input type="submit" value="Upload" name="submit" class="btn btn-primary display-4 upload-btn">
    </form>
  </div>
</body>
</html>
 
   

<style>
  
    .file-list {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="center-container">
    <div class="file-list">
      <?php
        $files = scandir("uploads");
        for ($a = 2; $a < count($files); $a++) {
      ?>
      <p>
        <?php echo $files[$a]; ?>
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">Download</a>
        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">Delete</a>
      </p>
      <?php
        }
      ?>
    </div>
  </div>
</body>
