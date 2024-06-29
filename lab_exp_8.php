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
else{
echo "Connection Successful". "<br><br><br>";
}
$sql = "SELECT * FROM tab1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
 while($row = $result->fetch_assoc())
{
 if((!strcmp($row["Name"],$_POST["fname"])))
 {
    echo " YOUR THEME SELECTION:" ."<br><br><br>";
 echo "Ocassion : " . $row["Ocassion"] . "<br>";
 echo "Colour : " . $row["Colour"] . "<br>";
 echo "No.Of.Orders : ". $row["Count"] . "<br>";
 echo "Size: ". $row["Size"] . "<br>";
 echo "Sample: " . $row["Sample"] . "<br>";
 echo "Date to be Delivered: " . $row["Date"] . "<br>";
 }
}
}
else { echo "Sorry..!You haven't yet given the design for the guestbook";
}
$conn->close();
?>
</body>
</html>