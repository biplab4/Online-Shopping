<!DOCTYPE html>
<html>
  <head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="cart.css">
    <style>
      .modal {
      display: none; 
      position: fixed; 
      z-index: 8888; 
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: solid black; /* Fallback color */
      background-color: solid black; /* Black w/ opacity */
      }

      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 60%; /* Could be more or less, depending on screen size */
      }

      @media (min-width: 1366px) {
      .modal-content {
      background-color: #fefefe;
      margin: 10vh auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 30%; /* Could be more or less, depending on screen size */
      }
      }

      h2, p {
      margin: 0 0 20px;
      font-weight: 400;
      color: #666;
      }

      span{
      color: #666;
      display:block;
      padding:0 0 5px;
      }

      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: #eee; 
      }

      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }

      .contact-form button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }

      button:hover {
      background: #2371a0;
      }    

      .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      }

      .close:hover,
      .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
      }

      button.button {
      background:none;
      border-top:none;
      outline: none;
      border-right:none;
      border-left:none;
      border-bottom:#02274a 1px solid;
      padding:0 0 3px 0;
      font-size:16px;
      cursor:pointer;
      }
      
      button.button:hover {
      border-bottom:#a99567 1px solid;
      color:#a99567;
      }
    </style>
  </head>
  <body style="background-color: tomato;">
    <div id="banner"></div>
    <div style="color: black; text-align: center; font-weight: bold;">
    <h1 style="font-family: cursive;">ShopUS Online</h1>
       <em><strong>Varieties Here for you</strong></em>
    </div>
    <p>
      <div class="button" data-modal="modalOne">
        
          <div id="pro1" style="color: black">
            <a href="#">
              <img src="p1.jpg" alt="product1" style="height:300px">
              <h5>LG Mobile</h5> 
              <p>Rs 15000</p>
              <span id="buy">Click to Buy</span>
            </a>
          </div>
          <div id="pro2">
            <a href="#">
              <img src="p2.jpeg" alt="product2" style="height:300px">
              <h5>Lucis Caron</h5> 
              <p>Rs 800</p>
              <span id="buy">Click to Buy</span>
            </a>
          </div>
          <div id="pro3">
            <a href="#">
              <img src="p3.jpg" alt="product3" style="height:300px">
              <h5>Mast & Habour Shoe</h5> 
              <p>Rs 999</p>
              <span id="buy">Click to Buy</span>
            </a>
          </div>
      </div>
    </p>

    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form">
          <a class="close">&times;</a>
          <form action="cart-insert.php" method="POST">
            <h2>Contact Us</h2>
            <div>
              <input class="fname" type="text" name="fname" placeholder="Full name">
              <input type="text" name="address" placeholder="Address">
              <input type="text" name="phone" placeholder="Phone number">
              <input type="text" name="qty" placeholder="Quantity">
            </div>
            <button type="submit" href="/">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>

    <script>
      var modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.getAttribute('data-modal');
          document.getElementById(modal).style.display = "block";
        }
      });
      
      var closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn){
        btn.onclick = function() {
          var modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      
      window.onclick = function(event) {
        if (event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
<?php

	$con = mysqli_connect('localhost','root','');


	mysqli_select_db($con,'project');
	$Username = $_POST['uname'];
	$Password = $_POST['pword'];
	$q= "select * from login username = '$Username' && password = '$Password'";
	mysqli_query ($con,$q);


	$sql = "insert into login (`username`,`password`) VALUES('$Username','$Password')";

	mysqli_query($con,$sql);
?>
  </body>
</html>


