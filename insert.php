<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<?php
// put your code here
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
$sql = "INSERT INTO MyfirstDB (Firstname, Lastname,EmailID)
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[id]')";
if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
}
 else
 {
    echo "Error: " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
