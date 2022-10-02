<!-- WILL REFRESH THE PAGE EVERY 10 SECONDS -->
<?php
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'on') {
		$url = "https://";
	} else {
		$url = "http://";
		$url.= $_SERVER['HTTP_HOST'];
		$url.= $_SERVER['REQUEST_URI'];
		$url;
	}

	$page = $url;
	$sec = "10"
?>
<!-- WILL REFRESH THE PAGE EVERY 10 SECONDS -->

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- REFRESHER SCRIPT ENABLER -->
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">

	<!-- META TAGS -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
</head>
<body>
	hello there
</body>
</html>