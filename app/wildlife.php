<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <link href="css/main.css", type="text/css", rel="stylesheet">
</head>
<body>
  



  <nav>
    <ul>
      <li><a href="index.php" class=" navbtn ">Home</a></li>
      <li><a href="photography.php" class=" navbtn ">Photography</a></li>
      <li><a href="gallery.php" class=" navbtncur ">Gallery</a></li>
      <li><a href="#" class="navbtn">Blog</a></li>
      <li><a href="about.php" class=" navbtn ">About</a></li>
      <li><a href="contact.php" class=" navbtn ">Contact</a></li>
    </ul>
  </nav>


  <div id="page" class="container_12 clearfix">

    <header class="grid_12">
  <img src="images/Header Logo.png" alt="Website Logo">
</header>


    <div class="grid_12">
      <h1 id="pageHeader">Wildlife Gallery</h1>
    </div>

    <div class="galleryThumb grid_3">
        <a href="images/gallery/wildlife/Little Nipper (website).jpg" rel="lightbox" data-lightbox="wildlife" title="I owe the very existence of this image to our guide on the lovely Ria Lagartos in Mexico, how he managed to spot this little fella bathing on a washed up branch from the middle of the river I will never know =)">
          <img class="imageThumb" src="images/gallery/wildlife/Little Nipper (website).jpg" alt="An image of a baby crocodile resting on a log" title="Little Nipper" />
        </a>
        <p>Little Nipper</p>
    </div><!-- galleryThumb -->

    <div class="galleryThumb grid_3">
        <a href="images/gallery/wildlife/Lookout (website).jpg" rel="lightbox" data-lightbox="wildlife" title="You didn't really have to work hard to capture amazing wildlife on the Ria Lagartos, this blackhawk was just perched atop a branch on the lookout for it's next meal as we sailed past.">
          <img class="imageThumb" src="images/gallery/wildlife/Lookout (website).jpg" alt="An image of a blackhawk perched on a dead tree branch" title="Lookout" />
        </a>
        <p>Lookout</p>
    </div><!-- galleryThumb -->

  </div>



  <!--build:js js/main.min.js-->
  <script type="text/javascript" src="js/recent_photos.js"></script>
  <script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
  <!--endbuild-->
  <!-- google analytics code -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-62904127-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>
