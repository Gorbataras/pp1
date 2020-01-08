<?php
//Name: Taras Gorbachevskiy
//Date: January 6th 2020
//URL: tgorbachevksiy.greenriverdev.com/IT328/pp1/
//Pair Programming 1
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
include "./functions.php";
$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);
echo "<br>";
echo "Largest ". largest($numbers);
echo "<br>";
echo "Array Unique: ";
echo "<br>";
echo printArr(removeDups($numbers));


?>

</body>
</html>
