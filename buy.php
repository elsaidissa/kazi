<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"><title>farmer</title>
 
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body> 
    <section class="snavbar">
        <nav class="nav-fixed">
                <div class="nav-wrapper">
                  <a href="#" class="brand-logo">Farmers Makert</a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="tooltipped" data-position="left" data-tooltip ="home" href="index.php"><i class="material-icons">home</i>home</a></li>
                    <li><a class="tooltipped" data-position="bottom" data-tooltip ="buy" href="sell.php"><i class="material-icons">shop</i>buy</a></li>
                    <li><a class="tooltipped" data-position="left" data-tooltip ="logout" href="logout.php"><i class="material-icons">lock_open</i>logout</a></li>
                                        
                    
                    
                  </ul>
                </div>
              </nav>
              <section class="sidenav container" id="mobile-demo">
                <header class="container">
  
      <h5 class= "center pink-text" style="background-color: #2bde5b; border-radius: 15px 15px 15px 15px;
      font-size: 1.5rem;"><marquee class="blink">Welcome Web-Farmer!</marquee></h5>
                </header>
                
                <ul>
                  <li><a href="index.php"><i class="material-icons green-text">home</i>home</a></li>
                  <li><a href="sell.php"><i class="material-icons green-text">shop</i>sell</a></li>
                  <li><a href="logout.php"><i class="material-icons green-text">lock_open</i>logout</a></li>
                </ul>
  
                  </section>
                  
                
                
  </section>    
     
    <div class="container">

        <header class="container center">

            <form>
                <div class="input-field">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
                      </header>
                      
                    
        </div>
        <div class="container space">
        <p class="white-text text-lighten-3">CURRENT POSTS</p>
        </div>
    
        <section class="section container">

            <div class="section">
                <div class="subheader">
                <h6 class="teal-text"> Trending</h6> 
                </div>
                
            <div class="row">
                <div class="col s6 m6 l6 xl6">
                    <div class="card">
                        <div class="card-image">
                            <img src="images/kaa.jpeg">
                            <span class="card-title">Post_Name</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light pink pulse" type="submit"><i class="material-icons">phone</i></a>
                        </div>
                        <div class="card-content">
                            <ul class="uli">
                            <li>Category :</li>
                            <li>Brand    :</li>
                            <li>Condition:</li>
                            <li>Price    :</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col s6 m6 l6 xl6">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/lindi.jpeg">
                                <span class="card-title">Post_Name</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light pink pulse"><i class="material-icons">phone</i></a>
                            </div>
                            <div class="card-content">
                                <ul class="uli">
                                    <li>Category :</li>
                                    <li>Brand    :</li>
                                    <li>Condition:</li>
                                    <li>Price    :</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s6 m6 l6 xl6">
                        <div class="card">
                            <div class="card-image">
                                <img src="images/golani.jpeg">
                                <span class="card-title">post_name</span>
                                <a class="btn-floating halfway-fab waves-effect waves-light pink pulse"><i class="material-icons">phone</i></a>
                            </div>
                            <div class="card-content">
                                <ul class="uli">
                                    <li>Category :</li>
                                    <li>Brand    :</li>
                                    <li>Condition:</li>
                                    <li>Price    :</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row"> 
                        <div class="col s6 m6 l6 xl6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="images/beach.jpeg">
                                    <span class="card-title uli">post_name</span>
                                    <a class="btn-floating halfway-fab waves-effect waves-light pink pulse"><i class="material-icons">phone</i></a>
                                </div>
                                <div class="card-content">
                                    <ul class="uli">
                                        <li>Category :</li>
                                        <li>Brand    :</li>
                                        <li>Condition:</li>
                                        <li>Price    :</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <ul class="pagination align center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul> 
</section>
    
        
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/loader.js"> 
</script>    
    </body> 
    </html>
