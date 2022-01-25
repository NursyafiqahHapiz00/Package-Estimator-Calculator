<?php
//Start the session to store information
session_start();
?>

<!DOCTYPE html>

<!-- The webpage is in english language
 Use UTF-8 which covers almost all of the characters and symbols in the world
 Enable the user's visible area depends on their device, small for smartphone and large for computers
 Allows web authors to choose what version of Internet Explorer and ie=edge display the content in the highest mode available
 Rel Stylesheet specifies the relationship between current document with imported style sheet from href. Href specifies the link's destination -->

<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Package Estimator</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>

<body>
		<!-- To create the header of the webpage -->
		<!-- Id=wrapper is used to create the white large box to insert the content -->
		<div id="wrapper">
		<div id="header">
			<h1>Your Selected Package</h1>
			<h2>Thank you for choosing our services!</h2>
		</div>
		
	<!-- To create the function of the package calculation using php -->
	<div id="page-wrap">
		<div id="main-content">
		
	<?php
		if (isset($_POST['reset'])) {
			//Destroys all the data associated with the current session
			session_destroy();
			header('location:index.php');
		}	

		if (isset($_POST['submit'])) {
				$package = $_POST['package'];
				echo '<b>Selected Package:</b> ' .$package;
				echo "<br><br>";
				$no_nights = $_POST['no_nights'];
				echo '<b>Number of nights:</b> ' .$no_nights;
				echo "<br><br>";
		
				//To calculate charge before discount
				if ($package =="Premier") {
					$before_discount = $no_nights*500;
					echo '<b>Total charge before discount:</b> RM ' .$before_discount;
				}
			
					//To calculate package superior
					else if ($package =="Superior") {
							$before_discount = $no_nights*300;
							echo '<b>Total charge before discount:</b> RM ' .$before_discount;	
					}
								
					//To calculate package standard
					else if ($package =="Standard") {
							$before_discount = $no_nights*150;
							echo '<b>Total charge before discount:</b> RM ' .$before_discount;	
					}			
		
				echo "<br><br>";
					
				//To calculate husband and wife age
				$husband_ic = $_POST['husband_ic'];
				$wife_ic = $_POST['wife_ic'];
				$birthdate_husband = substr($husband_ic, 0, 2); //To extract only first 2 digits
				$birthdate_wife = substr($wife_ic, 0, 2); //To extract only first 2 digits
				$length = 4;
		
				//To calculate IC number that starts with 00 until 22 born in the year of 2000
				if ($birthdate_husband <= 22) {
					$yearofbirth_husband = substr(str_repeat(20, $length).$birthdate_husband, - $length); //To create 20 + number of first 2 digits at IC
					$today = date("Y");
					$age_husband = $today - $yearofbirth_husband;
				}
		
					//To calculate IC number that starts with 23 until 99 born in the year of 1900
					else if ($birthdate_husband > 22 && $birthdate_husband <= 99) {
							$yearofbirth_husband = substr(str_repeat(19, $length).$birthdate_husband, - $length);
							$today = date("Y");
							$age_husband = $today - $yearofbirth_husband;		
					}
		
				if ($birthdate_wife <= 22) {
					$yearofbirth_wife = substr(str_repeat(20, $length).$birthdate_wife, - $length);
					$today = date("Y");
					$age_wife = $today - $yearofbirth_wife;
				}
		
					else if ($birthdate_wife > 22 && $birthdate_wife <= 99) {
							$yearofbirth_wife = substr(str_repeat(19, $length).$birthdate_wife, - $length);
							$today = date("Y");
							$age_wife = $today - $yearofbirth_wife;
					}
		
				$combined_age = $age_husband + $age_wife;
				echo '<b>Combined age:</b> ' .$combined_age = $age_husband + $age_wife; 
				echo "<br><br>";
					
				//To calculate golden age discount
				if ($combined_age <= 100) {
					$golden_discount = 0;
					echo '<b>Golden age discount:</b> Not eligible for golden discount';
				}

					//To calculate discount between combined age 121-140
					else if ($combined_age > 100 && $combined_age <= 120) {
						$golden_discount = $before_discount*0.20;
						echo '<b>Golden age discount:</b> RM ' .$golden_discount;		
				}
		
					//To calculate discount between combined age 121-140
					else if ($combined_age > 120 && $combined_age <= 140) {
							$golden_discount = $before_discount*0.20;
							echo '<b>Golden age discount:</b> RM ' .$golden_discount;		
					}
		
					//To calculate discount combined age above 141
					else if ($combined_age > 140) {
							$golden_discount = $before_discount*0.30;
							echo '<b>Golden age discount:</b> RM ' .$golden_discount;		
					}
		
				echo "<br><br>";
					
				//To calculate perakian disocunt
				$husband_born = substr($husband_ic, 6, 2); //To extract only middle 2 digits that represents born states
				$wife_born = substr($wife_ic, 6, 2); //To extract only middle 2 digits that represents born states
					
				//To calculate if huband or wife born in perak (middle IC = 08)
				if ($husband_born == "08") {
					$perakian_discount = $before_discount*0.05;
					echo '<b>Perakian discount:</b> RM ' .$perakian_discount;	
				}
		
					else if ($wife_born == "08") {
							$perakian_discount = $before_discount*0.05;
							echo '<b>Perakian discount:</b> RM ' .$perakian_discount;	
					}
		
					//To calculate if husband and wife are not born in perak (middle ic is not 08)
					else if ($husband_born != "08" && $wife_born != "08") {
							$perakian_discount = 0;
							echo '<b>Perakian discount:</b> Not eligible for Perakian discount';	
					}
					
				echo "<br><br>";
				$total_discount = $golden_discount + $perakian_discount;
				echo "<b>Total discount:</b> RM " .$total_discount;
				echo "<br><br>";
				$after_discount = $before_discount - $total_discount;
				echo "<b>Total charge after discount:</b> RM " .$after_discount;
			}
	?>

		<br><br><br>
		<div class="col-md-6">
			<a href="index.php" class="btn btn-danger"> Back </a>
		</div>

		<div id="print">
			<button style="cursor: pointer; width: 70px;" onClick="window.print()">Print</button>
		</div>
		</div>
	</div>

		<p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
	</body>
</html>	
