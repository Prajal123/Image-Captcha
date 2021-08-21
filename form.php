<?php

 session_start();
 if(isset($_SESSION['captcha']) && $_POST['my-captcha']==$_SESSION['captcha']){
     unset($_SESSION['captcha']);
     echo '<h1>Correct Captcha, Thank You</h1>';
 }else{
     echo "<h1>Invalid Captcha</h1>";
 }
?>