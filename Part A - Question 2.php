<?php
header("Content-Type: image/png");

// Create an image canvas (300x150 pixels)
$image = imagecreate(300, 150);

// Define colors
$white = imagecolorallocate($image, 255, 255, 255); // White background
$red = imagecolorallocate($image, 255, 0, 0); // Red rectangle
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Draw a filled rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Add label text
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
