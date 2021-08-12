<?php
include('connect.php');
$query = "SELECT * FROM tn order by ID asc";
$result = mysqli_query($conn,$query);
$html='<table><tr><td>ID</td><td>Name</td><td>Phone</td><td>City</td><td>Products</td></tr>';
while($row = mysqli_fetch_assoc($result))
{
    $html.='<tr><td>'.$row['ID'].'</td><td>'.$row['Name'].'</td><td>'.$row['Phone'].'</td><td>'.$row['City'].'</td><td>'.$row['Products'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>