<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Movement Data Analysis</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php include('navigation.php'); ?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Domain Sitation</h3>
  </div>
  <ul>
  <li>What are people doing?</li><br>
  <li>EMDs (Emergency Medical Dispatcher) are gathering information related to medical emergencies</li><br>
  <li>EMDs take hundreds of calls from emergency situations</li><br>
  <li>Emergency Situation types with a lot of subtypes:</li>
		<ul>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Medical (accident, cardiac arrest, … )</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Police</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Fire</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;...</li>
        </ul><br>
	<li>EMD centers provide a 24/7 service, therefore all emergency agencies heavily rely on them</li>
    </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Goal</h3>
  </div>
  <ul>
  <li>EMDs want to minimize response time of emergency agencies</li><br>
  <li>Choosing the right hospital for every emergency</li>
		<ul>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Trauma centres</li>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Rehabilitation</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Children‘s hospitals</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Geriatric hospitals</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;...</li>
        </ul><br>
	<li>Support for emergency agencies regarding highway access with consideration of current traffic (traffic jams, density of driveway)</li>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Data</h3>
  </div>
  <ul>
  <li>GPS data from interstate 880</li><br>
  <li>Location of</li>
		<ul>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;hospitals</li>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;police stations</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;fire departments</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;...</li>
        </ul><br>
	<li>Our data is covering</li>
		<ul>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;3 counties (Alameda County, Santa Clara County, Contra Costa County)</li>
        <li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;10 big cities (Oakland, Fremont, San Jose, ...)</li>
		<li>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;~100km of highway</li>
        </ul><br>
  <li>Mobile Century Data</li><br>
  <li>From University of California, Berkeley</li><br>  
  <li>77 individual phonelogs</li><br>
  <li>Additional sources: videotracking, in-road censors</li><br>  
  <li>Geographic location of healtcare facilities, police stations, … from data.gov</li><br>
  </ul>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Task Abstraction</h3>
  </div>
  <ul>
  <li>Overview  (for the interstate)</li><br>
  <li>Filter (slow cars, traffic jams, accidents)</li><br>
  <li>Select (position, location of interests)</li><br>
  <li>Zoom</li><br>
  </ul>
</div>



</body>
</html>