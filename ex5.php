<html>
<head>
<meta charset=UTF-8"/>
<title>Objects</title>
</head>
<body>
<?php
class Dept 
{
    function Dept() 
{
   $this->d = "IT";
    }
}
$s = new Dept();
echo $s->d;
?>
</body>
</html>
