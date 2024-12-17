<?php
header("Content-Type: image/png");

// Path to the TrueType font (ensure the font file is in the same directory)
$font_path = "JosyWine-G33rg.ttf"; // Replace with your font file name

// Create an image canvas (400x100 pixels)
$image = imagecreate(400, 100);

// Define colors
$light_gray = imagecolorallocate($image, 200, 200, 200); // Light gray background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Add text using a TrueType font
imagettftext($image, 20, 0, 50, 60, $black, $font_path, "Hello, Hamidi!");

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
