<?php
header("Content-Type: image/png");

// Create an image canvas (300x300 pixels)
$image = imagecreate(300, 300);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$green = imagecolorallocate($image, 0, 255, 0); // Green circle
$purple = imagecolorallocate($image, 128, 0, 128); // Purple line

// Draw a green circle
imageellipse($image, 150, 150, 100, 100, $green);

// Draw a purple line
imageline($image, 50, 50, 250, 250, $purple);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
