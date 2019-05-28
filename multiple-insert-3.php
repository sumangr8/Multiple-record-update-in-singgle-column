	<?php
$con=mysqli_connect("localhost","root","","demo");
$arrContact = array();

	foreach ($_POST as $arrNameKey => $arrValue) {
		if($arrValue != 'Insert'){
			foreach ($arrValue as $key => $arrDetails) {
				$arrContact[$key][$arrNameKey] = $arrValue[$key];
			}
		}
	}

	foreach ($arrContact as $intContactId => $arrContactValue) {
	
		$sqlContact=mysqli_query($con,"UPDATE `contact` SET `name`='".$arrContactValue['name']."',`surname`='".$arrContactValue['surname']."',`city`='".$arrContactValue['city']."',`language`='".$arrContactValue['language']."' WHERE id='".$arrContactValue['id']."' ");            
		if(!empty($sqlContact)){
			header('Location:index.php');
		}
	}


?>