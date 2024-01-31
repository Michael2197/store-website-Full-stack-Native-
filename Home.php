 <?php

session_start();
ob_start();


 include('db.php')



?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/index8b.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <?php include('db.php'); ?> 

    
</head>

  <body style="height: 58vh;">
    <div class="hole"> 
       <div class="item1">
        <div id="product" class="child2">PRODUCTS</div>
        <div class="child3">WOMEN</div>
        <div class="child4">MEN</div>
        <div class="child5">ABOUT</div>
        <div class="child6">CONTACT</div>
      
       
          <p>
            <div class="bu">T-SHIRTS</div> 
            <br>
            <div class="no2">s t o r e</div> 
  
          </p>
       </div>

       <div class="child7">


        <i id="search"class="fa-solid fa-magnifying-glass"></i>
       </div>


       
       
       


       

       <!-- <div id="reg"class="child8">Register</div>-->

       <div id="log" class="child10">
        <?php
       echo $_SESSION['name'];
        
        ?> 
       </div> 












       </div>
       <div class="item2">
       
         <button1 class="button1">Shop Collection</button1>
        

        </div>
        </div>
      </div>

      <div class="item3">
        <div class="item3a"><p>SUMMER COLLECTION</p>
        </div>
        <div class="item3b">

          <h1>Popular T-Shirts</h1>
        </div>

      </div>
      


      </div>


      <div class="item4">
        <div class="item4a"></div>
        <div class="item4b"></div>
        <div class="item4c">
          <div class="item4c1">

            <i class="fa-sharp fa-light fa-badge-percent"></i>
          </div>

          
        </div>
        <div class="item4d"></div>


      </div>
      <div class="item5">

        <div class="item5a">
          
          <p>WOMEN</p>
          <h1>T-Shirt Name 9</h1>
          <h2>$23.00 – $28.00</h2></div>

        <div class="item5b">
         <p>MEN</p> 
          <h1>T-Shirt Name 8</h1>
         <h2>$21.00 – $25.00</h2>
        </div>

        <div class="item5c">
          <p>WOMEN</p>
         <h1>T-Shirt Name 7</h1> 
          <h2>$36.00 – $39.00</h2>
        </div>

        <div class="item5d">
          <p>MEN</p>
         <h1>T-Shirt Name 10</h1> 
          <h2>$33.00 – $36.00</h2>
        </div>


      </div>

      <div class="item6">
        <div class="item6a"></div>
        <div class="item6b"></div>
        <div class="item6c">
          <p>MEN</p>
          <h1>The base collection - Ideal every day.</h1></div>
          <div class="item6c1">
          <button1 class="button1">Shop Now</button1></div>


      </div>
      <div class="item7">

        <div class="item7a">

          <p>NEW COLLECTION</p>
          <h1>Be different in your own way!</h1> 
           <h2>Find your unique style.</h2>
          <h3><button2 class="button2">Shop Now</button2></h3></div>
        </div>

      </div>

      <div class="item8">
        <div class="item8a"></div>
        <div class="item8b">
           <p>WOMEN</p>
           <h1>Spring Summer Collection</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id leo tempor, congue justo at, lobortis orci. Aliquam venenatis dui lectus, eu convallis turpis convallis et. Pellentesque.</p>
           <h3><button class="button3">See Whole Collection</button></h3>



        </div>


      </div>
      <div class="item9">
        <div class="item9a"><p>SUMMER COLLECTION</p>
        </div>
        <div class="item9b">

          <h1>Popular T-Shirts</h1>
        </div>

      </div>
      <div class="item10">
        <div class="item10a"></div>
        <div class="item10b"></div>
        <div class="item10c"></div>
        <div class="item10d"></div></div>

        <div class="item11">

          <div class="item11a">
            
            <p>MEN</p>
            <h1>T-Shirt Name 4</h1>
            <h2>$17.00 – $19.00</h2></div>
  
          <div class="item11b">
           <p>MEN</p> 
            <h1>T-Shirt Name 6</h1>
           <h2>$18.00 – $22.00</h2>
          </div>
  
          <div class="item11c">
            <p>WOMEN</p>
           <h1>T-Shirt Name 7</h1> 
            <h2>$36.00 – $39.00</h2>
          </div>
  
          <div class="item11d">
            <p>WOMEN</p>
           <h1>T-Shirt Name 1</h1> 
            <h2>$18.00 – $20.00</h2>
          </div>
  
  
        </div>


        <div class="item12">

          <h1>Reviews</h1>
          <div class="item12a">

          <p>“ Very good quality T-shirts and lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis ipsum! ”</p></div>

        </div>
        <div class="item13">
          <div class="item13a">

          <p>JANE OLIVER</p></div>
        </div>


        <div class="item14">

          <div class="item14a"></div>

            
          <div class="item14b"></div>
          <div class="item14aa">
            <h1>MEN</h1>
            <p>5 PRODUCT</p>
          
          </div>

          <div class="item14bb">
            <h1>WOMEN</h1>
            <p>5 PRODUCT</p>
          </div>


        </div>

        <div class="item15">
          <div class="item15a">
            <h1>Subscribe To Get Offers In Your Inbox</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, adipiscing elit sed do eiusmod condimentum</p>
          </div>

          <form id="Subscribe">
		

            <input type="text" class="mola" placeholder="Your email Address ..." />
            <button class="mtm">Subscribe</button>
          </form>



          <div class="item15b">
            <div class="childn2">BUY T-SHIRTS</div>
          <div class="childn3">WOMEN</div>
          <div class="childn4">MEN</div>
          <div class="childn5">ABOUT</div>
          <div class="childn6">CONTACT</div></div>

          <div class="item15c">
            

            
           <p>Copyright © 2023 T-Shirts Store | Powered by T-Shirts Store</p></div>
           <div class="item15d">

            <div class="item15d1"> 
              <p><i class="fa-brands fa-facebook-f"></i></p> </div>


              <div class="item15d2">
                <p><i class="fa-brands fa-twitter"></i></p></div>

                <div class="item15d3">
                  <p><i class="fa-brands fa-instagram"></i></p></div>




           



          </div>


        </div>

           <div id="pg"><button id="button">X</button>
            <form action="">

              <input class="input"type="input" placeholder="Search..." />
              <button type="button" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button></form>
           </div>





           <div id="login"><div class="bs"><h1>welcome</h1> <p> <?php
            echo $_SESSION['name'];
             
             ?> </p></div>
           
          <div class="info">
           
            
            <p>
              <?php echo "Your email is: ".$_SESSION['email'];?>
               
                 </p>
               </div>
            
            <br>

            <button class="bb"  type="submit"> <a href="index.php">Log out</a> </button>

            
          </div>

          

           </div>

      <div id="prod"  class="prod"></div>


      </div>



   
    </div>
   
     <script src="static/js/jquery-3.6.4.min.js"></script>
    <script src="static/js/project20a.js?v=3"></script>

  </body>
</html>