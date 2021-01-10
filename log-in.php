<?php 
  include_once("./php/log-in.php"); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <link href="./css/log-in.css" rel="stylesheet" type="text/css"/>
</head>
<div class="sign-in">
    <div class="overlap-group1">
      <div class="x-appbar">
        <div class="overlap-group2">
          <div class="logo-dashboard">
            <div class="logo-bg"></div>
            <div class="name valign-text-middle border-class-1 quicksand-medium-storm-dust-36px">RIALTO</div>
          </div>
          <img
            class="logorialto-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/logorialto-1@2x.svg"
          />
        </div>
        <div class="overlap-group3">
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
      <div class="name-1 valign-text-middle border-class-1 quicksand-medium-storm-dust-36px"><a href = "./log-in.php">LOG IN</a></div>
    </div>
    <div class="auto-flex1">
      <div class="auto-flex">
        <h1 class="welcome-back border-class-1 quicksand-bold-ebony-clay-64px">Welcome Back!</h1>
        <div class="ready-to-connect border-class-1 quicksand-light-ebony-clay-30px">Ready to connect?</div>
        
        <form method="POST" action="./php/log-in.php"> <!--refresh page when submitted-->

            <input type="hidden" id="submitLoginUserRequest" name="submitLoginUserRequest">
        
        <div class="overlap-group">
          <div class="your-email border-class-1 quicksand-medium-french-gray-24px">Your Email</div>
          <div class="enter-you-password border-class-1 manrope-medium-mercury-14px"><input type="text" name="userName" placeholder="email@rialto.ca">
          </div>
          <div class="rectangle-7"></div>
          <div class="password border-class-1 manrope-medium-french-gray-24px">Password</div>
          <div class="enter-you-password border-class-1 manrope-medium-mercury-14px"><input type="text" name="pw" placeholder="Enter you password"></div>
          <div class="rectangle-7-1"></div>
          <div class="auto-flex2">
            <div class="rectangle-8 border-class-2"></div>
            <div class="remember-me border-class-1 manrope-medium-french-gray-14px">Remember me</div>
            <div class="forgot-password border-class-1 manrope-medium-yellow-orange-14px">Forgot Password?</div>
          </div>
        </div>
        <input class="log-in valign-text-middle border-class-1 quicksand-medium-white-24px" type="submit" value="login" name="loginUserSubmit"></p>
        </form>
      </div>
      <div class="frame-1">
        <div class="overlap-group4">
          <img
            class="logo-2"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae4efae9df9314027ebed/img/logo-2@2x.gif"
          />
          <img
            class="logo-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae4efae9df9314027ebed/img/logo-2@2x.gif"
          />
        </div>
      </div>
    </div>
  </div>
  </html>