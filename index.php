<?php
include '/content/navbar.php';
include '/content/content.php';
include '/content/footer.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<title>CSI, SMIT</title>
	
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	
	<script type="application/javascript" src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="js/handler.js"></script>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="wrapper">
		<div id="header">
			<?php echo navbar();?>
		</div>
		<div id="content">
			<?php echo content();?>
		</div>
		<div id="footer">
			<?php echo footer();?>
		</div>
	</div>
</body>
</html>