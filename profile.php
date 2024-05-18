<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Профиль</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/bobr.webp">
     <link rel="shortcut icon" href="images/bobr.webp" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/camera.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/superfish.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
     <script>
      $(document).ready(function(){
      jQuery('#camera_wrap').camera({
        loader: false,
        pagination: false,
        thumbnails: true,
        height: '57.60517799352751%',
        caption: true,
        navigation: false,
        fx: 'mosaic'
      });   
    });   
    
      $(document).ready(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
      }); 
    
     
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     </head>
<body class="pg1">
<!--==============================header=================================-->
<div class="main">
     <div class="head">  
     <div class="container_12">
           <div class="grid_12">
         <header>
               <h1><a href="index.html"><img src="images/osnov.png" alt=""></a></h1>
                    </form>
          </div>
               <div class="clear"></div>
             <nav> 
               <div class="inner">
                <ul class="sf-menu">
                    <li id="first-li"><a href="index.html">Главная</a></li>
                     <li><a href="index-1.html">О нас</a>
                     <li><a href="index-2.html">Проекты</a> </li>
                     <li><a href="index-3.html">Другие услуги</a></li>
                     <li class="current"><a href="index-4.php">Профиль</a></li> 
                         <li id="last-li"><a href="index-5.html">Контакты</a></li> 
                 </ul>
                     <div class="clear"></div>
               </div>
              </nav>
      </header></div>
         </div>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

     <!--==============================footer=================================-->  
     <div class="div-indent"></div>  
</div>
  <footer>
      <div class="main-footer">
    <div class="container_12"><div class="grid_6 ff_right">
                    <div class="pages">
                      <a href="index.html">Главная</a>
                      <a href="index-1.html">О нас</a>
                      <a href="index-2.html">Проекты</a>
                      <a href="index-3.html">Другие услуги</a>
                      <a href="index-4.php" class="current-1" >Профиль</a>
                      <a href="index-5.html">Контакты</a>
                    </div>
                </div>
              <div class="grid_6">
                    <p class="txt-up">
                      <span>&nbsp;&nbsp;&copy; 2012&nbsp;|&nbsp;<a href="index-6.html">Политика конфиденциальности</a> <br></span>
                    </p>
                    </div>
              </div>
                
                <div class="clear"></div>
        </div>
      </div>  
  </footer> 
</body>
</html>