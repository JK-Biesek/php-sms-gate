<?php
require '../app/init.php';
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SMS</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="../public/css/master.css">
   </head>
   <body>
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
         <div class="navbar-header">
           <button type="button" name="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
             <span class="sr-only">Toggle Navigation</span>
             <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="index.php">SMS Appication</a>
         </div>
         <div class="collapse navbar-collapse" id="navbar">
           <ul class="nav navbar-nav">
             <li><a href="index.php">Send SMS Message</a></li>
               <li><a href="verify.php">Verification</a></li>
           </ul>
         </div>
       </div>
     </nav>
     <div class="container">
