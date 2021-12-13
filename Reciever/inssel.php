<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

<table>
<tr>
<td>Name</td>
<td><input type="text" name="txtname"  /></td>

</tr>

<tr>
<td>Fname</td>
<td><input type="text" name="txtfname"  /></td>

</tr>

<tr>
<td>Email</td>
<td><input type="text" name="txtemail"  /></td>

</tr>

<tr>
<td><input type="submit" name="btn" value="Submit-Data"/></td>
<td><input type="submit" name="sel" value="Select-Data"/></td>
</tr>

</table>
</form>
<?php

if(isset($_POST['btn']))
{

    $name = $_POST['txtname'];
    $fname = $_POST['txtfname'];
    $email = $_POST['txtemail'];

$con=mysqli_connect("localhost","root","","test");
$qu= mysqli_query($con,"insert into tbl values('','$name','$fname','$email')");

if($qu)
{

echo"<script>alert('Data Inserted')</script>";

}
else
{

    echo"<script>alert('Data Not Inserted')</script>";

}
}
if(isset($_POST['sel']))
{

    $con=mysqli_connect("localhost","root","","test");
$qu=mysqli_query($con,"select * from tbl");
while($row = mysqli_fetch_array($qu))
{

echo "
<table border='1'>
<tr>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
</tr>



</table>


";


}





}



?>
</body>
</html>