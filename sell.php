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
    <link rel="stylesheet" href="css/registration.css">

    
</head>
<body> 
    <section class="snavbar">
        <nav class="nav-fixed">
                <div class="nav-wrapper">
                  <a href="#" class="brand-logo">Farmer Makert</a>
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="tooltipped" data-position="left" data-tooltip ="home" href="index.php"><i class="material-icons">home</i>home</a></li>
                    <li><a class="tooltipped" data-position="bottom" data-tooltip ="buy" href="buy.php"><i class="material-icons">shop</i>buy</a></li>
                    <li><a class="tooltipped" data-position="left" data-tooltip ="logout" href="logout.php"><i class="material-icons">lock_open</i>logout</a></li>
                    
                    
                    
                    
                  </ul>
                </div>
              </nav>
              <section class="sidenav container" id="mobile-demo">
                <header class="container">
  
      <h5 class= " center white-text" style="background-color: #2bde5b"><marquee class="blink">Welcome Web-Farmer!</marquee></h5>
                </header>
                
                <ul>
                  <li><a href="index.php"><i class="material-icons green-text">home</i>home</a></li>
                  <li><a href="buy.php"><i class="material-icons green-text">shop</i>buy</a></li>
                  <li><a href="logout.php"><i class="material-icons green-text">lock_open</i>logout</a></li>
                </ul>
  
                  </section>
                  
                
                
  </section>    
     
    <div class="container">

        <header class="container">

            <h5 class= " center white-text" style="background-color: #2bde5b;border-radius:10px 10px 10px 10px;font-size: 1.5rem;"><marquee class="blink">SELL YOUR ITEMS</marquee></h5>
                      </header>
                      <label class="">Pick Date First</label>
                      <input type="text" class="datepicker">
        </div>
  
    <div class="container">

      <!-- Modal Trigger -->
      <a class="juzi waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons">menu</i></a>
      
      <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h5 class="white-text center" style="border-radius:10px 1px 10px 1px;
          background-color:#2bde5b">POST YOUR ITEMS</h5>
  
          <div class="row">
            <div class="input-field col s12">
              <input id="post_name" type="text">
              <label class="" for="post_name">Post_Name</label>
            </div>
          </div>

         <div class="row">
          <div class="input-field col s12">
           <input type="file" accept="image/*,.pdf" multiple />

          </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12">
              <input id="Category" type="text">
              <label for="category">Category</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="brand" type="text">
              <label for="brand">Brand</label>
            </div>
          </div> 
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="text">
              <label for="condition">Condition</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="price" type="text">
              <label for="price">Price</label>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Submit</a>
        </div>
      </div>
      
      
    </div>    
  

            
        
        
        
    </body> 
    </html>
    
    

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/loader.js"></script>