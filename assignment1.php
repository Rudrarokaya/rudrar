<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	<style>
		table,th,td{
			border:1px solid black;
			padding: 5px;
			text-align: center;
			border-spacing: 2px;

		}
	</style>
</head>
<body>
	<fieldset>
	<h4> FoodTruck Online order form</h4>
		<h1>STEP 1: Delivery Information</h1>
	<form method="POST" action="welcome.php">
			Customer's Name:<input type="text" name="Customer"><br><br>
			Phone Number: <input type="numeric" name="Code"> <input type="numeric" name="Phone"><br><br>
			Delivery Address:<textarea name="Address" rows="4" cols="40"></textarea><br><br>


			<h1>STEP 2: Your Menu Choice</h1>
				<table width="50%">
					<tr>
						<th>Menu</th>
						<th>Price</th>
						<th>Quantity</th>
					</tr>

					<tr>
						<td>MOMO</td>
						<td>Rs.120</td>
						<td><input type="numeric" name="MOMO"></td>
					</tr>
					<tr>
						<td>Chowmein</td>
						<td>Rs.110</td>
						<td><input type="numeric" name="Chowmein"></td>
					</tr>
					<tr>
						<td>Laphing</td>
						<td>Rs.90</td>
						<td><input type="numeric" name="Laphing"></td>
					</tr>
					
				</table><br><br>
		
		<button>Confirm Order</button> <button>Cancel Order</button>
	</form>
</fieldset>

</body>
</html>