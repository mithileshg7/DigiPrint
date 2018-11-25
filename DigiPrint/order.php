<html>
<body>
<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,"customer");

$sql="INSERT INTO orders (Type,numberc,numberbw,numberflex,numbervinyl,numbermugs,numbertshirts,link,Delivery,Address)
VALUES
('$_POST[Type]','$_POST[q1]','$_POST[q2]','$_POST[q3]','$_POST[q4]','$_POST[q5]','$_POS6[q6]','$_POST[link]','$_POST[del]','$_POST[add]')";

if (!mysqli_query($con,$sql))
  {
	echo "sdasdasda";
  die('Error: ' . mysqli_error($con));
  }
//echo "1 record added";
header("Location: ordsucess.html");

mysqli_close($con);
?>
</body>
</html>