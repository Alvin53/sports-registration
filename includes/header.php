<?php
//This includes the sesion file. This file contains code that tart/resumes a session.
//By having it in the header file, it will be included on every age, allowing session capability to be used on every page across website.
include_once 'includes/session.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css">
    <title> Attendance - <?php echo $title ?></title>
  </head>
  <body> 
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">SPORTS REGISTRATION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto ">
            <a class="nav-link active" href="index.php">Home</a>
            <a class="nav-link" href="viewrecords.php">View Sporting Records</a>
            <a class="nav-link" href="sportregister.php">Register For Sport Club</a>
            <a class="nav-link" href="contactus.php">Contact Us</a>
            
          </div>
            
          <div class=" navbar-nav ml-auto">
            <?php 
              if(isset($_SESSION['userid'])){
            ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
            <?php } else { ?>
              <a class="nav-item nav-link" href="#"><span> Welcome <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>

            <?php } ?>
          </div>
        </div>
  </nav>
  <br/>
