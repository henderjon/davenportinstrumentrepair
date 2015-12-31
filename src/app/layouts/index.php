<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Davenport Instrument Repair</title>
	<link rel="shortcut icon" href="img/clear.gif" />

	<meta name="description" content="Davenport Instrument Repair has multiple locations in Minneapolis and St. Paul, Minnesota. Davenport Instrument Repair can perform routine and specialized maintenance on woodwind instruments, brass instruments, and string instruments, as well as guitars." />
	<meta name="keywords" content="minneapolis minnesota, st. paul minnesota, woodwind instrument maintenance and repair, brass instrument maintenance and repair, string instrument maintenance and repair, guitars maintenance and repair" />
	<meta name="verify-v1" content="ySswtAZD9IARB1ltYX2W4ywcD4YXI1tZfpR4wuhY7fQ=" />

	<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />

</head>
<body>
	<table id="page" cellspacing="0">
		<tr id="header">
			<td colspan="2"><p>PROUDLY SERVING TWIN CITIES MUSICIANS FOR OVER 30 YEARS</p></td>
		</tr>
		<tr>
			<td id="column_left">
				<div id="left_image"><img src="<?= $this->img ?>" border="0" width="243" height="131" /></div>
				<div id="nav"><?= $this->nav; ?></div>
			</td>
			<td id="column_right">
				<?php call_user_func($this->view) ?>
			</td>
		</tr>
		<tr id="footer">
			<td colspan="2"></td>
		</tr>
</table>
	<div id="copy" style="position: fixed; bottom: 10px; right: 10px; font-size: 10px;">
		<?= '&copy; '.date('Y').' Davenport Instrument Repair'; ?>
	</div>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-4843535-3', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>
