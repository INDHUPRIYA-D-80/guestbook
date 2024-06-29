 <html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "login_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
echo "Connection Successful". "<br>";
}
$n=$_POST["fname"];
$e=$_POST["femail"];
$p1=$_POST["pwd1"];
$p2=$_POST["pwd2"];
$a=$_POST["faddress"];
$m=$_POST["fmobno"];
$sql = "INSERT INTO table1 (Name,Email,Pass,Cpass,Address,Mobileno)
VALUES ('$n','$e','$p1','$p2','$a','$m')";
if (mysqli_query($conn, $sql))
{
echo "Your account has been created successfully !";
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>