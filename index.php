<!DOCTYPE html>
<html >
<head>
  <title>Sign in and Sign up</title>  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600'>
      <link rel="stylesheet" href="css/style_log.css">
</head>

<body>
  <div class="cont_principal">
  <div class="cont_centrar">
  <div class="cont_login">
    <form action="_POST">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">
      <input type="text" class="input_form_sign " placeholder="NAME" name="name" />
      <input type="text" class="input_form_sign d_block active_inp" placeholder="EMAIL" name="email" />
      <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="pass" />  
      <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_pass" />
      
    <a href="#" class="link_forgot_pass d_block" >Forgot Password ?</a>    
<div class="terms_and_cons d_none">
    <p><input type="checkbox" name="terms_and_cons" /> <label for="terms_and_cons">Accept  Terms and Conditions.</label></p>
    </div>
      </div>
<div class="cont_btn">
     <button class="btn_sign">SIGN IN</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <script  src="js/index.js"></script>
</body>
</html>



<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "invoice");
    // Check connection
    if(!$link){
        die("ERROR: Could not connect. " . mysqli_error($link));
    }

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];


     $query = ("INSERT INTO sign_up ([name],[email], [pass]) VALUES ('$name','$email', '$pass')");

if(mysqli_query($link,$query))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('FAILED TO INSERT');</script>";
 }


    // Close connection
    mysqli_close($link);
?>
