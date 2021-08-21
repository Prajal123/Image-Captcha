<?php
session_start();
if(isset($_GET['captcha_text']) && isset($_SESSION['captcha'])){
    $captcha_text=$_GET['captcha_text'];

    $image=imagecreate(100,32);
    $background_color=imagecolorallocate($image,0,0,0);
    $text_color=imagecolorallocate($image,255,255,255);

    imagestring($image,4,25,8,$captcha_text,$text_color);


    header('Content-type:image/png');
    imagepng($image);
    imagecolordeallocate($text_color);
    imagecolordeallocate($background_color);
    imagedestroy($image);
}
?>