<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>El.Venizelos</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" type="text/css" href="/~db/db-aviation/chromemenu/chrometheme/chromestyle2.css" />

<script type="text/javascript" src="/~db/db-aviation/chromemenu/chromejs/chrome.js">


/***********************************************
* Chrome CSS Drop Down Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<html>
		<head>
			<title>AIRPORT EL.VENIZELOS</title>
			<meta
                		http-equiv="Content-Type"
                		content = "text/html; charset=utf-8;"
        		/>
			<link
        			rel = "stylesheet"
        			type = "text/css"
				href = "/~db/db-aviation/css/style.css" />
			<link rel = "shotcut icon" href= "/~db/db-aviation/images/maurouli.jpg"/>
		</head>
	</div>
    
	<body>
		<h1 id = "top">     AIRPORT   ELEFTHERIOS   VENIZELOS</h1>
		<?php
    			$myset = include "settings-local.php";
		?>

<!--Main Menu-->
		<div class= "chromostyle" id="chromemenu">
			<ul>
			<li class="mainMenu"><img 
			            src = "/~db/db-aviation/images/maurouli.jpg"
                		alt= "The db is not a lie..." 
                		width="50" 
                		hight="50" /> 
			<a href="/~db/db-aviation">HOME</a></li>
			<li><a href="#" rel="dropmenu1">EMPLOYEES</a></li>
			<li><a href="#" rel="dropmenu2">AIRCRAFTS</a></li>
			<li><a href="#" rel="dropmenu3">CHECKS</a></li>
			</ul>
		</div>

<!--1st drop down menu-->
		<div id="dropmenu1" class="dropmenudiv">
			<a href="/~db/db-aviation/views/listEmployees.php">Employees</a>
			<a href="/~db/db-aviation/views/listTechnicians.php">Technicians</a>
			<a href="/~db/db-aviation/views/listAirTrafficControllers.php">Air Traffic Controllers</a>
		</div>  

<!--2nd drop down menu-->
			<div id="dropmenu2" class="dropmenudiv">
			<a href="/~db/db-aviation/views/listAircraftFleet.php">Aircraft Fleet</a>
			<a href="/~db/db-aviation/views/listAircraftModels.php">Aircraft Model</a>
		</div>

<!--3rd drop down menu-->
		<div id="dropmenu3" class="dropmenudiv">
			<a href="/~db/db-aviation/views/listChecks.php">Checks</a>
			<a href="/~db/db-aviation/views/listFAATests.php">FAA Check Types</a>
		</div>

<!--javascript menu-->

	<script type="text/javascript">
		cssdropdown.startchrome("chromemenu")
	</script>

