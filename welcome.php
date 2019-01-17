<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<style >
		table,th,td{
			border:1px solid black;
			padding: 5px;
			text-align: center;
			border-spacing: 2px;
		}
	</style>
</head>
<body>

	<h4>FOODTRUCK OFFICIAL RECEIPT</h4>

<?php
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$Customer=$_POST["Customer"];
		$Code=$_POST["Code"];
		$Phone=$_POST["Phone"];
		$Address=$_POST["Address"];
		$MOMO=$_POST["MOMO"];
		$Chowmein=$_POST["Chowmein"];
		$Laphing=$_POST["Laphing"];
	}
		
		echo $Customer;
		echo "<br>";
		echo $Code;
		echo $Phone;
		echo "<br>";
		echo $Address;
		echo "<br><br>";
		
?>
		<table width="50%">
					<tr>
						<th>Menu</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
						
					</tr>

					<tr>
						<td>MOMO</td>
						<td>Rs.120</td>
						<td><input type="numeric" name="MOMO" value="<?php echo $MOMO ?>"></td>
						<td><input type="numeric" name="MOMO" value="<?php echo $MOMO*120?>">
							
					</tr>
					<tr>
						<td>Chowmein</td>
						<td>Rs.110</td>
						<td><input type="numeric" name="Chowmein" value="<?php echo $Chowmein ?>"></td>
						<td><input type="numeric" name="Chowmein" value="<?php echo $Chowmein*110?>"></td>
						
					</tr>
					<tr>
						<td>Laphing</td>
						<td>Rs.90</td>
						<td><input type="numeric" name="Laphing" value="<?php echo $Laphing ?>"></td>
						<td><input type="numeric" name="Laphing" value="<?php echo $Laphing*90 ?>"></td>
						
					</tr>
					<tr>
						<td colspan="3">Total Price to pay:(Rs.)</td>
						<td><input type="numeric" name="Total Price" value="<?php echo (($MOMO*120)+($Chowmein*110)+($Laphing*90));?>"></td>
						</tr>
						<?php (20/100)*(($MOMO*120)+($Chowmein*110)+($Laphing*90)) ?> 
						<tr>
							<td colspan="3"> Total Price after 20% flat discount:(Rs.)</td>
							<td>	<input type="numeric" name="Total Price after 20% flat discount" value="<?php echo (($MOMO*120)+($Chowmein*110)+($Laphing*90))-((20/100)*(($MOMO*120)+($Chowmein*110)+($Laphing*90)))?>"> </td>
					 	</tr>
		</table>

</body>
</html>