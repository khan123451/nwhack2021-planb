<?php 
  include_once("./php/post-form.php"); 
?>
<!DOCTYPE html>
<head>
    <link href="./css/post-form.css" rel="stylesheet" type="text/css"/>
</head>
<div class="post-form">
    <div class="overlap-group1">
      <div class="x-appbar">
        <div class="overlap-group4">
          <div class="logo-dashboard">
            <div class="logo-bg"></div>
            <div class="name-1 valign-text-middle border-class-1 quicksand-medium-storm-dust-36px">RIALTO</div>
          </div>
          <img
            class="logorialto-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/logorialto-1@2x.svg"
          />
        </div>
        <div class="overlap-group5">
          <div class="register valign-text-middle border-class-1 quicksand-medium-blue-36px"><a href = "./register-form.php">REGISTER</a></div>
        </div>
        <img
          class="fernando-pidrilio"
          src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/fernando-pidrilio@2x.jpg"
        />
      </div>
      <img
        class="button-bg"
        src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/button-bg@2x.svg"
      />
      <div class="name valign-text-middle border-class-1 quicksand-medium-storm-dust-36px"><a href = "./log-in.php">LOG IN</a></div>
    </div>
    <div class="overlap-group">
      <div class="x-appbar">
        <div class="overlap-group4">
          <div class="logo-dashboard">
            <div class="logo-bg"></div>
            <div class="name-1 valign-text-middle border-class-1 quicksand-medium-storm-dust-36px">RIALTO</div>
          </div>
          <img
            class="logorialto-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/logorialto-1@2x.svg"
          />
        </div>
        <div class="overlap-group5">
          <div class="register valign-text-middle border-class-1 quicksand-medium-blue-36px"><a href = "./register-form.php">REGISTER</a></div>
        </div>
        <img
          class="fernando-pidrilio"
          src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/fernando-pidrilio@2x.jpg"
        />
      </div>
      <img
        class="button-bg"
        src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/button-bg@2x.svg"
      />
      <div class="name valign-text-middle border-class-1 quicksand-medium-storm-dust-36px"><a href = "./log-in.php">LOG IN</a></div>
    </div>
    <div class="auto-flex1">
      <div class="auto-flex">
        <h1 class="want-to-connect border-class-1 quicksand-bold-ebony-clay-64px">Want to connect?</h1>
        <div class="ready-to-sale border-class-1 quicksand-light-ebony-clay-30px">Ready to sale?</div>
        <div class="overlap-group2">

        <form method="POST" action="./php/post-form.php"> <!--refresh page when submitted-->
          <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
          <div class="product-name border-class-1 manrope-medium-french-gray-24px">Product Name: <input class="product-name-1 border-class-1 manrope-medium-mercury-14px" type="text" name="insProductName" placeholder="Product Name" required/></div> <br /><br />
          <div class="product-name border-class-1 manrope-medium-french-gray-24px">Amount: <input class="text-3 border-class-1 manrope-medium-mercury-14px" type="number" name="insLocation" placeholder="Amount"></div> <br /><br />
          <div class="product-name border-class-1 manrope-medium-french-gray-24px">Time: <input class="text-3 border-class-1 manrope-medium-mercury-14px" type="text" name="insTime" placeholder="Date(in text)"></div> <br /><br />
          <div class="product-name border-class-1 manrope-medium-french-gray-24px">Detail: <input class="our-company-has border-class-1 manrope-medium-mercury-14px" type="text" name="insDetail" placeholder="Our company has ..."></div> <br /><br />
      
          <input type="submit" value="Insert" name="insertSubmit" class="save valign-text-middle border-class-1 quicksand-medium-white-36px"></p>
      </form>
        </div>
      </div>
      <div class="overlap-group3">
        <img
          class="logo-1"
          src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae4efae9df9314027ebed/img/logo-2@2x.gif"
        />
        <img
          class="logo-2"
          src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae4efae9df9314027ebed/img/logo-2@2x.gif"
        />
      </div>
    </div>
  </div>
</html>