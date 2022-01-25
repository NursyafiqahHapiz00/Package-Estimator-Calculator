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
			<h1>Package Estimator</h1>
			<h2>We are celebrating our 50 years' anniversary! Special promotions has been offered for you.</h2>
		</div>
	
	<!-- To explain about the promotions -->
	<div id="page-wrap">
		<p style="text-align:justify; margin-top: 50px;"> <a style="text-decoration:none; color:black;">Since we are celebrating our 50 years' anniversary, therefore, two special discounts has been offered for our beloved customers namely <strong>Golden Age discount</strong> and <strong>Perakian discount</strong>. Below are the details for our promotions. If you are eligible for it, grab yours now!</a></p>
	
	<br><br>
	
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>

	<!-- To create discount tabs -->
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Package')">Package</button>
		<button class="tablinks" onclick="openCity(event, 'Golden Age Discount')" id="defaultOpen">Golden Age Discount</button>
		<button class="tablinks" onclick="openCity(event, 'Perakian Discount')">Perakian Discount</button>
	</div>

		<div id="Package" class="tabcontent">
			<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
			<h3>Type of Packages</h3>
			<br>
			<p>You may refer to the table below for listing of package that we offered to our beloved customers: -</p>
			<br>
			
			<!-- To create table discount -->
			<table class="table table-striped">

			<!-- To create table column -->
				<thead>
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Package</th>
						<th scope="col">Amount</th>
					</tr>
				</thead>
	
			<!-- To create table row -->
				<tbody>
					<tr>
						<th scope="row">1</th> <!-- Details for row 1 -->
						<td>Premier</td>
						<td>RM500 per night</td>
					</tr>
					<tr>
						<th scope="row">2</th> <!-- Details for row 2 -->
						<td>Superior</td>
						<td>RM300 per night</td>
					</tr>
					<tr>
						<th scope="row">3</th> <!-- Details for row 3 -->
						<td>Standard</td>
						<td>RM150 per night</td>
					</tr>
			
				</tbody>
			</table>
		</div>

		<div id="Golden Age Discount" class="tabcontent">
			<span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
			<h3>Golden Age Discount</h3>
			<br>
			<p>This discount is given to the couple with the combined age is more than 100 years. You may refer to the table below for the disocunt rate: -</p>
			<br>
			
			<!-- To create table discount -->
			<table class="table table-striped">

			<!-- To create table column -->
				<thead>
					<tr>
						<th scope="col">No.</th>
						<th scope="col">Combined Age (Years)</th>
						<th scope="col">Discount Rate</th>
					</tr>
				</thead>
	
			<!-- To create table row -->
				<tbody>
					<tr>
						<th scope="row">1</th> <!-- Details for row 1 -->
						<td>100 - 120</td>
						<td>10%</td>
					</tr>
					<tr>
						<th scope="row">2</th> <!-- Details for row 2 -->
						<td>121 - 140</td>
						<td>20%</td>
					</tr>
					<tr>
						<th scope="row">3</th> <!-- Details for row 3 -->
						<td>Above 141</td>
						<td>30%</td>
					</tr>
			
				</tbody>
			</table>
		</div>

		<div id="Perakian Discount" class="tabcontent">
		  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
		  <h3>Perakian Discount</h3>
		  <br>
		  <p>All couple either husband or wife who was born in Perak is eligible to claim <strong>5% of discount.</strong></p> 
		</div>

	<script>
		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
	
	<br><br> 

		<!-- To create the form -->
			<form class="post-form" action="display.php" method="post"> 
			<div class="form-group">
					<label class="col-md-3 control-label"> Husband IC No.: </label>
						<input type="number" name="husband_ic" placeholder="Without (-)" min="0" class="form-control" required value=""/>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label"> Wife IC No.: </label>
					<input type="number" name="wife_ic" placeholder="Without (-)" min="0" class="form-control" required value=""/>
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label"> Package Type: </label><br>
					  <input type="radio" id="package" name="package"  value="Premier"/>Premier
					  <input type="radio" id="package" name="package"  value="Superior"/>Superior  
					  <input type="radio" id="package" name="package" value="Standard"/>Standard
				</div>

				<div class="form-group">
					<label class="col-md-3 control-label"> No. of Nights: </label>
					<input type="number" name="no_nights" placeholder="Insert number of nights here" min="0" class="form-control" required value=""/>
				</div>

			<br><br>
				<div>
					<input class="submit" type="submit" name="submit" value="Calculate" />
					<input class="submit" type="submit" name="reset" value="Reset" />
				</div>				
			</form>
		</div>

		<p style="text-align:center; margin-top: 100px; color: black;">The app is created by <a href="https://www.linkedin.com/in/nursyafiqah-hapiz/" style="color:blue; text-decoration:none;">SYAFIQAH HAPIZ</a></p>
		</div>
	</body>
</html>