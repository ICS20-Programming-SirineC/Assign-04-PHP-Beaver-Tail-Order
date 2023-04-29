<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Metadata-->
      <meta charset="utf-8" />
      <meta name="description" content="Assign-04-PHP-Beaver-Tail-Order" />
      <meta name="keywords" content="immaculata, ics2o" />
      <meta name="author" content="Sirine Cherkaoui" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Welcome to Beaver Tail Rail!</title>
      <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
      <link rel="manifest" href="./favicon/site.webmanifest" />
      <!--CSS file-->
      <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
   <body>
      <?php
         // MDL Customize
         echo '<link rel="stylesheet" type="text/css" href="https://code.getmdl.io/1.3.0/material.brown-deep_orange.min.css">';
         echo '<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>';
         // JS file
         echo '<script src="./js/script.js"></script>';
      ?>
      <!--MDL Layout-->
      <div class="mdl-layout mdl-js-layout">
         <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Welcome to Beaver Tail Rail!</span>
            </div>
         </header>
         <br>
         <br>
         <!--Images-->
         <center><img src="./images/beavertails.jpg" alt="Beaver Tail" width="400" height="300"><img src="./images/coffee.jpg" alt="Coffee" width="400" height="300"><img src="./images/lollipops.jpg" alt="Lollipops" width="400" height="300"></center>
         <br>
         <br>
         <!--Double Border-->
         <center>
            <p class="double"> Welcome to Beaver Tail Rail! The best beaver tail shop in town! Explore our special menu and place your order today using this webpage! Don't hesitate to add a side order to enjoy our sweet maple syrup lollipops and creamy coffee! Bon appétit! 
            </p>
         </center>
         <table>
            <tr>
               <td id="one">
                  <!-- Table for menu and prices-->
                  <center>
                     <h3>Our Menu and Prices</h3>
                     <br>
                     <br>
                     <table>
                        <tr>
                           <th class="border">Menu</th>
                           <th class="border">Price</th>
                        </tr>
                        <tr>
                           <td class="border">Plain Dough Beaver Tail</td>
                           <td class="border">Small: $3.99<br>Medium  $4.99<br>Large: $5.99</td>
                        </tr>
                        <tr>
                         <td class="border">Chocolate Dough Beaver Tail</td>
                           <td class="border">Small: $4.99<br>Medium $5.99<br>Large: $6.99</td>
                        </tr>
                        <tr>
                           <td class="border">Toppings</td>
                           <td class="border">$0.75 each</td>
                        </tr>
                        <tr>
                           <td class="border">Coffee</td>
                           <td class="border">$3.00</td>
                        </tr>
                        <tr>
                           <td class="border">Maple Syrup Lollipop</td>
                           <td class="border">$2.00</td>
                        </tr>
                     </table>
                  </center>
                  <br>
                  <br>
               <td id="two">
                  <div id="grey">
                     <h4>Your Order:</h4>
                    
      <!-- Form for user input -->
      <form action="./results.php" method="post" target="order">