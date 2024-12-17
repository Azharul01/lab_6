<?php
header("Content-Type: image/png");

// Create an image canvas (300x100 pixels)
$image = imagecreate(300, 100);

// Define colors
$yellow = imagecolorallocate($image, 255, 255, 0); // Yellow background
$black = imagecolorallocate($image, 0, 0, 0); // Black text

// Add text to the image
imagestring($image, 5, 90, 40, "100 Items Sold", $black);

// Output the image
imagepng($image);

// Free memory
imagedestroy($image);
?>
