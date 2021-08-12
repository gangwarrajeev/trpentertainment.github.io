<?php 
$conn=mysqli_connect("localhost","root","","trpentertainment_tn") or die(mysqli_connect_error());

$uploadfile=$_FILES['uploadfile']['tmp_name'];
require 'PhpSpreadsheet/classes/spreadsheet.php';
require_once 'PhpSpreadsheet/classes/IOFactory.php';

$objExcel=phpspreadsheet\IOFactory::load($uploadfile);
foreach ($objExel->getWorksheetIterator() as $worksheet) {
	 $highestrow=$worksheet->getHighestRow();
	 for($row=0;$row<highestrow;$row++)
	 {
	 	$Name=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
		$Phone=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
	 	$City=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
	 	$pincode=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
	 	$products=$worksheet->getCellByColumnAndRow(4,$row)->getValue();
	 	if($name!='')
	 	{
	 		$insertqry="INSERT INTO tn(name,phone,city,pincode,product) VALUES('{$Name}','{$Phone}','{$City}','{$products}')";
	 		$result=mysqli_query($conn,$insertqry);
	 	}
	 }
}
header('location:import.php');
?>