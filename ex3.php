<html>
<head>

<title>Switch</title>
</head>
<body>
<?php
$x = date("H");
if ($x < "20") 
{
echo "Welcome to Rajalakshmi Institute Of Technology";
}
$i = "2";
switch ($i) 
{
    case "1":
        echo "<br>PHP is a server side scripting language";
        break;
    case "2":
        echo "<br>PHP stands for Personal Home Page and also Hypertext Preprocessor";
        break;
    case "3":
        echo "<br>PHP is platform independent";
        break;
    default:
        echo "Invalid Choice";
}
?>
</body>
</html>
