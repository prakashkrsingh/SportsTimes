<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
<style type="text/css">
</style>
</head>
<body background="back4.jpg">
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
	<div class="col-sm-12"></div>
</div>
<div class="row">
	<div class="col-sm-3"></div>

<div class="col-sm-6"><div class="panel panel-info">
	<div class="panel-heading">
		login
	</div>
	<div class="panel-body">
		<!--form designing-->
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label">Email</label>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="pTEXT" class="form control"/></div>
					<label class="control-label">password</label>
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" class="form control"/><br/>

				</div><button class="btn.btn-success">log in</button>
			</div>
		</form>
	</div>
</div></div>
<div class="col-sm-3"></div>
</div>
</div>
<div class="footer">
<?php
include 'footer.php';
?>
</div>
</div>
</body>
</html>