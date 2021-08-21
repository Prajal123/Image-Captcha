<?php

session_start();

$captcha=rand(111111,999999);
$_SESSION['captcha']=$captcha;
?>
<style>
    img{
        margin:20px;
    }
  .captcha{
      font-size:20px;
  }
  .submit{
      padding:5px;
      cursor:pointer;
      font-size:20px;
  }
    </style>
<h1>Prove that you are not a robot</h1>
<p>Type the text in the image to prove that you are not a robot</p>
<form action="form.php" method="post">
    <p class="captcha">Captcha:</p>
    <p><img src="image.php?captcha_text=<?php echo $_SESSION['captcha']?>" alt="" ></p>
    <input type="text" name="my-captcha" id="">
    <p><input type="submit" value="submit" name="submit" class="submit"></p>
</form>