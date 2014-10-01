<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="travel.css" />
<link  type="text/css" rel="stylesheet" href="example3/colorbox.css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"> </script>
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('a.gallery1').colorbox({ opacity:0.5 , rel:'group1', transition:"none" });
                $(".gallery2").colorbox({rel:'group2'});
                 $(".gallery3").colorbox({rel:'group3'});
                });
</script>

<title>Carl's Travels Around the World - Photos</title>
</head>
<body id="photos">
<div id="main">
<?php include("header.php"); ?>
<div class="body">
<div class="left">
<p><img src="" alt="egypt" title="Visa from Egypt" id="mainphoto" /> </p>
<p>Location: Egypt<br />
Date Visited: 2013</p>
</div>
<div class="right">
<h1 id="top">Egypt</h1>
<p id="turnpage"><a href="azer.php" title="turn page">&lt; Previous Album</a> 
<span id="nextpage"><a href="europe.php" title="go to next album">Next Album &gt;</a></span>
</p>
<ul class="gallery">
<?php 
	for ($i=1; $i <= 68; $i++):
?>
<li><a class='gallery1' href='photos/Egypt/egypt<?=$i?>.jpg' title=""><img src="photos/Egypt/egypt<?=$i?>thumb.jpg"  alt="Egypt" /><br/>Egypt</a></li>


<?php endfor; ?>


</ul>

<hr class="clearme2"/>
<p id="turnpage"><a href="azer.php" title="turn page">&lt; Previous Album</a> 
<span id="nextpage"><a href="europe.php" title="go to next album">Next Album &gt;</a></span>
</p>
<p><a href="#top" title="back to top">Back to Top</a></p>
</div>


<hr class="clearme"/>

<?php include("footer.php"); ?>
</div>
</div>
</body>
</html>