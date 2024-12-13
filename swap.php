<html>
<head>
<title>SWAP TWO NUMBERS</title>
</html>
</head>

<?php

$a = 10;
$b = 20;

echo "Before swapping: \n <br>";
echo "a = " . $a . "\n <br>";
echo "b = " . $b . "\n <br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After swapping: \n <br>";
echo "a = " . $a . "\n <br>";
echo "b = " . $b . "\n <br>";
?>
