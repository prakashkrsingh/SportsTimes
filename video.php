<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<title>video</title>
	<style type="text/css">
.r{
			width: 100%;
			height: 650px;
			background-color: white;
		}
		.s{
			float: left;
			background-color: aqua;
			width:65%;
			height: 500px;
	</style>
</head>
<body background="back9.jpg">
<div id="sports">
<?php
include 'top.php';
?>
<div id="menu">
<?php
include 'menu.php';
?>
</div>
<br/>
<div class="container">
<div class="row">
<div class="col-sm-3">
		<video controls="controls" width="150" height="130">
		<source src="a.mp4">
		</video>
		<p>Protees Surprise Visit</p>
	</div>
	<div class="col-sm-3">
			<video controls="controls" width="150" height="130">
		<source src="b.mp4">
		</video>
		<p>Ultimate Football skills</p>
	</div>
	<div class="col-sm-3">
			<video controls="controls" width="130" height="130">
		<source src="c.mp4">
		</video>
	<p>Cricket Ki baat</p>
</div>
<div class="col-sm-3"></div>
	</div>
	<div class="row">
	<div class="col-sm-3">
	<img src="Football1.jpg" width="150" height="130">
	<p>Can Portugal Win it?</p>		
	</div>
	<div class="col-sm-3">
	<img src="e.jpg" width="150" height="130">
	<p>Hotstar:England vs SriLanka</p>		
	</div>
	<div class="col-sm-3">
	<img src="f.jpg" width="150" height="130">
	<p>Joshua breaks down Breazeale.</p>		
	</div>
	<div class="col-sm-3"></div>		
	</div>
	<div class="row">
		<div class="col-sm-3">
	<img src="g.jpg" width="150" height="130">
	<p>Memorable Quotes on Anil Kumble</p>		
	</div>
	<div class="col-sm-3">
	<img src="h.jpg" width="150" height="130">
	<p>Sunday's Euro stars to watch.</p>		
	</div>
	<div class="col-sm-3">
	<img src="i.jpg" width="150" height="130">
	<p>West Indies vs Australia,Final Match</p>		
	</div>
	<div class="col-sm-3"></div>
	</div>
	<div class="footer">
<?php
include 'footer.php';
?>
</div>
	</div>
</div>
</body>
</html>