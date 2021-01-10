<?php 
  include_once("./php/register-form.php"); 
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <link href="./css/register-form.css" rel="stylesheet" type="text/css"/>
</head>
<div class="register-form">
    <div class="overlap-group1">
      <div class="x-appbar">
        <div class="overlap-group3">
          <div class="logo-dashboard">
            <div class="logo-bg"></div>
            <div class="name valign-text-middle border-class-1 quicksand-medium-storm-dust-36px">RIALTO</div>
          </div>
          <img
            class="logorialto-1"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffad3ce523371ab7e02d28d/img/logorialto-1@2x.svg"
          />
        </div>
        <div class="overlap-group4">
          <div class="register valign-text-middle border-class-1 quicksand-medium-blue-36px"><a href = "./register-form.html">REGISTER</a></div>
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
      <div class="name-1 valign-text-middle border-class-1 quicksand-medium-storm-dust-36px"><a href = "./log-in.html">LOG IN</a></div>
    </div>
    <div class="overlap-group5">
      <div class="overlap-group">
        <div class="company border-class-1 manrope-medium-french-gray-24px">Company</div>

        <form method="POST" action="./php/register-form.php"> <!--refresh page when submitted-->
          <input type="hidden" id="insertQueryRequest" name="insertQueryRequest">
          <div class="company-name border-class-1 manrope-medium-mercury-14px">Company Name: <input class="text-3 border-class-1 manrope-medium-mercury-14px" type="text" name="insCompanyName" placeholder="Company abc" required/></div> <br /><br />
          <div class="company-name border-class-1 manrope-medium-mercury-14px">Password: <input class="text-3 border-class-1 manrope-medium-mercury-14px" type="text" name="insPassword" placeholder="********" required/></div> <br /><br />
          <div class="company-name border-class-1 manrope-medium-mercury-14px">Location: <input class="text-3 border-class-1 manrope-medium-mercury-14px" type="text" name="insLocation" placeholder="Street address, P.O. box, company name, c/o"></div> <br /><br />
          <div class="company-name border-class-1 manrope-medium-mercury-14px">Name of the owner: <input type="text" name="insNameofOwner" placeholder="Your Name"></div> <br /><br />
          <div class="company-name border-class-1 manrope-medium-mercury-14px">E-mail: <input type="text" name="insEmail" placeholder="example@xxx.com"></div> <br /><br />
          <div class="company-name border-class-1 manrope-medium-mercury-14px">Description: <input type="text" name="insDescription" placeholder="Visual Studio light mode is bad"></div> <br /><br />
          <div class="form-field border-class-2">
          <div class="category border-class-1 manrope-medium-french-gray-24px">
            <p> Category:
          <select name="insCategory" id="category">
            <option value="'Byproduct'">Byproduct</option>
            <option value="'others'">others</option>
          </select>
          </p>
        </div>
          <input type="submit" value="Insert" name="insertSubmit" class="save valign-text-middle border-class-1 quicksand-medium-white-36px"></p>
      </form>
        
          <img
            class="vector-2-stroke"
            src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae625890f75c70659b451/img/vector-2--stroke-@2x.svg"
          />
        </div>
      </div>
      <div class="ready-to-connect border-class-1 quicksand-light-ebony-clay-30px">Ready to connect?</div>
      <div class="overlap-group2">
        <h1 class="text-2 border-class-1 quicksand-bold-ebony-clay-64px">Happy to have you on board!</h1>
        <div class="frame-2"></div>
        <img
          class="networks"
          src="https://anima-uploads.s3.amazonaws.com/projects/5ffad3a63fd314155b2a5120/releases/5ffae625890f75c70659b451/img/networks@1x.gif"
        />
      </div>
      <!--div class="button"><div class="save valign-text-middle border-class-1 quicksand-medium-white-36px">SAVE</div></div-->
    </div>
  </div>
  </html>