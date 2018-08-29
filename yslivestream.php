<?php 
    session_start();
    
    if(isset($_SESSION['User'])){  //meaning user is logged in
        if(isset($_SESSION['type'])){
            if( $_SESSION['type'] !== 'ys' ){
                if( $_SESSION['type'] == 'bk' ){
                    header('Location: bklivestream.php');
                }
                elseif( $_SESSION['type'] == 'admin' ){
                    header('Location: livestream.php');
                }
                else {
                    header('Location: index.php');
                }
            }
        }
    }
    else{
       //meaning user is not logged or session had terminated 
       header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      
      <style type="text/css">
        body {
            margin: 0 0 0 0;
        }
      </style>
      
      <!--Global Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!-- Title and Favicon -->
    <title>YS RAM Livestream</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">

      
      <!-- Styling Links -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      

         <!-- Slider Refs -->

      
	 <!-- Feather Icons -->
	 <link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	 <script src="js/modernizr.custom.js"></script>
          
          
          <!-- /Slider Refs -->
      
    </head>
    
    
      <body id="top" oncontextmenu="return false">
          
      <!-- Landing -->
      
      <section class="landing fullpage" id="landing">
          <div class="text">
              <img src="assets/apm.png" class="apm animated fadeInDown ani1">
              <h1 class="h1text animated fadeInUp ani2">day 1 - arrival</br><span class="bold">ys livestream</span></h1>
              
             <iframe class="video animated fadeIn ani3" width="412" height="231.75" src="https://www.youtube.com/embed/TmHP9sIxMsE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              
              <img src="assets/footer.png" class="footer2 animated fadeIn ani4">
              
              
          </div>
            <div class="container-login100-form-btn2 animated fadeIn ani5">
                <?php 
                if(isset($_SESSION['User'])) {
                    
                    
                ?>
                <h5 class="phpjsn"><?php echo 'Jai Swaminarayan, ' . $_SESSION['User'].'<br/>'; ?></h5>
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    
                    <?php echo '<a href="logout.php?logout"><button class="login100-form-btn2 type">log out</button></a>'; ?>
                    
                    <?php
                        
                    }
                    ?>
                    
                </div>
                
            </div>
        
    
		  
      </section>
      


          
        <!-- Regular JavaScript -->  
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
