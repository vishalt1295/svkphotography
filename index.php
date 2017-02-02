<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SVK Photography</title>
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <!--- Begin Navbar -->
   <div class="navbar navbar-default navbar-static-top">
      <div class="container">
         <a href="index.html" class="navbar-brand">SVK Photography</a>
         <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse  navHeaderCollapse">
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Like us on Facebook"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
               <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Follow us on Instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="m-p-g">
      <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
         <img src="http://unsplash.it/600/400?image=940" data-full="http://unsplash.it/1200/800?image=940" class="m-p-g__thumbs-img img-responsive" />
		 <img src="http://unsplash.it/640/450?image=906" data-full="http://unsplash.it/1280/900?image=906" class="m-p-g__thumbs-img img-responsive" />
         <img src="http://unsplash.it/550/420?image=885" data-full="http://unsplash.it/1100/840?image=885" class="m-p-g__thumbs-img img-responsive" />
         <img src="http://unsplash.it/650/450?image=823" data-full="http://unsplash.it/1300/900?image=823" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" />
         
         <!----------------------------------------------------------->
                  <img src="http://unsplash.it/650/450?image=823" data-full="http://unsplash.it/1300/900?image=823" class="m-p-g__thumbs-img" />

         <img src="http://unsplash.it/600/400?image=940" data-full="http://unsplash.it/1200/800?image=940" class="m-p-g__thumbs-img" />
		 <img src="http://unsplash.it/640/450?image=906" data-full="http://unsplash.it/1280/900?image=906" class="m-p-g__thumbs-img" />
         
         <img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/550/420?image=885" data-full="http://unsplash.it/1100/840?image=885" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
         <img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
         
      </div>
      <div class="m-p-g__fullscreen"></div>
   </div>
     <!--<script src="js/jquery.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

     <script src="js/material-photo-gallery.min.js"></script>
     <script src="js/bootstrap.js"></script>
   <script>
      var elem = document.querySelector('.m-p-g');
      document.addEventListener('DOMContentLoaded', function() {
         var gallery = new MaterialPhotoGallery(elem);
      });
   </script>
   <script>
      $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
      });
   </script>
</body>
</html>