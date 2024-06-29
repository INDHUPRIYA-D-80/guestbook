<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "selection_table";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}
$n1=$_POST["fname"];
$o=$_POST["ocasion"];
$c=$_POST["colour"];
$n=$_POST["nfo"];
$s=$_POST["size"];
$s1=$_POST["sam"];
$d=$_POST["date"];
$sql = "INSERT INTO tab1 (Name,Ocassion,Colour,Count,Size,Sample,Date)VALUES ('$n1','$o','$c','$n','$s','$s1','$d')";
if (mysqli_query($conn, $sql))
{
echo "You have given the design for the guestbook.It has been created successfully !";
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>