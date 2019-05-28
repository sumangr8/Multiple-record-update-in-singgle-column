<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table style="text-align: center;">
	<form method="post" action="multiple-insert-3.php">
		<?php
		 // $numbers=$_POST['num'];
		$i=1;
		$con=mysqli_connect("localhost","root","","demo");
		$qry=mysqli_query($con,"SELECT * FROM contact");
		$arrContact = array();
		while ($row=mysqli_fetch_assoc($qry)) {
			$arrContact[$row['id']] =$row;
		}
	
		foreach ($arrContact as $arrContactKey => $arrContactValue) {
			?>
				<tr>
					<td colspan="2">Record # <?php echo $i; ?></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id[<?= $arrContactKey?>]" value="<?php echo $arrContactValue['id']; ?>"></td>
				</tr>	

				<tr>
					<td>Name</td>
					<td><input type="text" name="name[<?= $arrContactKey?>]" value="<?php echo $arrContactValue['name']; ?>"></td>
				</tr>	
				<tr>
					<td>SurName</td>
					<td><input type="text" name="surname[<?= $arrContactKey?>]" value="<?php echo $arrContactValue['surname']; ?>"></td>
				</tr>
				<tr>
					<td>City</td>
					<td><input type="text" name="city[<?= $arrContactKey?>]" value="<?php echo $arrContactValue['city']; ?>"></td>
				</tr>
				<tr>
					<td>Language</td>
					<td><input type="text" name="language[<?= $arrContactKey?>]" value="<?php echo $arrContactValue['language']; ?>"></td>
				</tr>

			<?php
			$i++;
		}	


		?>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Insert"></td>
			</tr>
	</form>
</table>
</body>
</html>