<html>
<head>
<meta charset="utf-8" /> 
<title>Loops</title>
</head>
<body>
<?php
$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
var_dump($month);
echo"<br><br>";
$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$arrlength = count($month);
for($x = 0; $x < $arrlength; $x++) 
{
    echo "<br>";
    echo $month[$x];
}
echo "Multiples of 5 <br>";
for ($x = 0; $x <= 10; $x++) 
{
    $x=5*$x;
    echo "The number is: $x <br>";
} 
function sample() {
echo "<br><br>Printing a statement using functions in PHP";
}
sample();
?>
</body>
</html>


