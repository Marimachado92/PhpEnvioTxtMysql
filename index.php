
<br>Importar fare_attributes.txt para o BD<br>

<?php 
$conn = mysqli_connect('localhost','root','','gtfs');

$open = fopen('fare_attributes.txt','r');

while (!feof($open)) 
{
	$getTextLine = fgets($open);
	$explodeLine = explode(",",$getTextLine);
	
	list($fare_id,$price,$currency_type,$payment_method,$transfers) = $explodeLine;
	
	$qry = "insert into fare_attributes (fare_id,price,currency_type,payment_method,transfers) values('".$fare_id."','".$price."','".$currency_type."','".$payment_method."','".$transfers."')";
	mysqli_query($conn,$qry);
}

fclose($open);


?>
