<html>
<body>
<?php
session_start();
$host= "localhost";
$username= "root";
$password = "";
$db_name = "login_form";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else{
echo "Connection Successful". "<br>";
}
$sql = "SELECT * FROM table1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((strcmp($row["Name"],$_POST["name"]) == 0))
{
    $_SESSION['name'] = $row["Name"];
    header("location: index.php");
    echo "Successful";
}
}
}
else { echo "0 results";
}
$conn->close();
?>
</body>
</html>