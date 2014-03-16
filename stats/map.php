<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link type="text/css" rel="stylesheet" href="travel.css" />
<script type="text/javascript"src="http://maps.googleapis.com/maps/api/js?key=AIzaSyASc83ZWFYSdIYdLvwm15wR9m6g_L-l2t0&sensor=false"></script>
<script type="text/javascript" src="js/map.js"></script><!--references marker locations for map-->
<script type="text/javascript">
      function initialize() {
        var myOptions = {
          center: new google.maps.LatLng(3, 5),
          zoom: 2,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
       
	var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
   
    /* var locations = [
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3],
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];*/
    
  var infowindow = new google.maps.InfoWindow();
  
  var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });
      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }


   }
  
</script>

<title>Carl's Travels Around the World - Map</title>
</head>
<body id="map" onload="initialize()">
<div id="main">
<?php include("header.php"); ?>
<div class="body">

<div class="right">
<h1>Where in the World?</h1>
<div id="map_canvas" title="Google map of world"></div>
<hr class="clearme"/>
</div>
<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>