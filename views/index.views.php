<?php require 'views/head.views.php'; ?>


<header>
  <nav class = "banner">
      <a><img class="font" src="image/logo.jpg" alt="Kiwi standing on oval" width = 100%></a>
      <a class= "welcome">Bienvenue</a>
  </nav>
</header>
   <main>
     <form method = "GET">
       <input id = "search" type = "name" name = "search"  value ='' placeholder = "comics" >
     </form>
     <div id = "joj" >
         <img class = "slider" id ="slider-previous" name = "previous" src = "image/noun_Arrow_left.png" alt="right" >
         <form method="post" action=<?php echo 'Comics'; ?> >
            <div id ="lol">

            </div>
        </form>
         <div>
           <!-- <img src = "http://localhost/sudokita/image/Undyne.gif" alt ="welou"> -->
         </div>
         <img class= "slider" id ="slider-next" name = "next" src = "image/noun_Arrow_right.png" alt="left">
      </div>
   </main>

<?php require 'views/foot.views.php'; ?>
