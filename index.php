<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="travel.css" />
	
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mouseover.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#mainphoto').mouseover(function(e) {
		doOnMouseOver(e);
	});
	
$('#mainphoto').mouseout(function(e) {
		doOnMouseOut(e);
	});
	
});</script>
<title>Carl's Travels Around the World</title>
</head>
<body id="home">
<div id="main">
<?php include("header.php"); ?>
<div id="body">
<div class="left">
<p><img src="photos/Carlcoffee.jpg" alt="Carl" title="Carl" id="mainphoto" /></p>
<p id="introtext">Name: Carl Calhoun <br />
Current Location: Songkhla, Thailand </p>
</div>
<div class="right">
<h1>Around the World</h1>
<p>In November of 2012, Carl Calhoun took a new job that requires him to travel each month for anywhere from 10-14 days.  
Each month is a different location across the globe, allowing for many new and exciting experiences. 
This site will serve as a means for him to stay connected with family and friends by sharing stories and photos.
<br />It is not a site about Carl's work, but about the places he goes because of it and his personal experiences.</p>
<h2>Current News</h2>
<p>Check here for the latest and greatest! Links to latest updates will display here. Soon to be updated!
</p>
</div>
<hr class="clearme"/>

<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>