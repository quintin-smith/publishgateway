<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Page Title - Publish Gateway</title>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<style>

body{margin: 0;
	font-size: 14px;
	font-family: 'Ubuntu', sans-serif;
	background-color: #eef1ee;
}

.container {position: relative;
	height: 100%;
}

.center {width: 80%;
	height: 50%;
	margin: auto;
	position: absolute;
	top: 0; left: 0; bottom: 0; right: 0;
}

table {background-color: #ffffff;
	border-radius: 0px;
	border-collapse:collapse;
}

li{list-style-type: none;
	margin: 10px 2px;
	font-size: 20px;
	text-align: center;
	padding: 10px;
}

a:hover{color: #5d6e78;
}

a:active{color: #a69a90;
}

nav{width: 100%;
	background-color: #000000;
	z-index: 5;
}

ul{display: flex;
    margin: 0;
	width: 20px;
	height: 65px;
	text-align: center;
}

td {width: 94%;
	padding: 20px;
	font-size:16px;
}

tr {width:30%;
	border:solid #d1d1d1 1px;
}

img {opacity: 0.8; 
  display:inline-block;
}

img:hover {opacity: 0.9; 
}

	</style>

</head>
<body>

<nav>
	<ul>		
		<li>
		<a href="#"><img src="/image.png" alt="Your Name"></a>
		</li>
	</ul>
</nav>

<br>

<div class="container">
<div class="center">

<h4>This is experimental software.</h4>
<br>

<table>
<tr><td><b>Your Public Messages</b></td></tr>
	 
<?php

// Copyright 2021 Quintin Smith

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "publishgateway";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Database error: " . mysqli_connect_error());
}

$sql = "SELECT publicpost, datum FROM publicpost, datum LIMIT 0,10";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["publicpost"]. "<br><br><i>" . $row["datum"]. " </i>";
    }
} else {
    echo "<tr><td><br><br>No results. Return to the previous page to make a post.<br><br><br>";
}

mysqli_close($conn);
?>

</td></tr>
</table>

</div>
</div>

</body>
</html>