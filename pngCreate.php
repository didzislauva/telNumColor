<?php 
// Set the image 
$img = imagecreatetruecolor(30,30); 
imagesavealpha($img, true); 

$R=(int)@$_GET['R'];
$G=(int)@$_GET['G'];
$B=(int)@$_GET['B'];
$Alpha=(int)@$_GET['Alpha'];

// Fill the image with transparent color 
$color = imagecolorallocatealpha($img,$R,$G,$B,$Alpha); 
imagefill($img, 0, 0, $color); 

header('Content-Type: image/png');
// Save the image to file.png 
imagepng($img); 

// Destroy image 
imagedestroy($img); 
?>