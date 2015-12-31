<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include('includes/functions.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<link rel="icon" href="images/favicon.ico" type="image/x-icon" />

<title>Davenport Instrument Repair</title>
<meta name="description" content="Davenport Instrument Repair has multiple locations in Minneapolis and St. Paul, Minnesota. Davenport Instrument Repair can perform routine and specialized maintenance on woodwind instruments, brass instruments, and string instruments, as well as guitars." />
<meta name="keywords" content="minneapolis minnesota, st. paul minnesota, woodwind instrument maintenance and repair, brass instrument maintenance and repair, string instrument maintenance and repair, guitars maintenance and repair" />

<meta name="verify-v1" content="ySswtAZD9IARB1ltYX2W4ywcD4YXI1tZfpR4wuhY7fQ=" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="stylesheet.css" type="text/css" media="screen" />

<script type="text/javascript" src="includes/js/mootools-1.2-core.js"></script>
<script type="text/javascript" src="includes/js/mootools-1.2-more.js"></script>

</head>
<body>
<?php
				$navArr = array(
					array('index.php', 'About', 'img' => 'Saxes_WebReady.jpg'),
					array('locations.php', 'Locations', 'img' => 'Guitar_WebReady.jpg'),
					array('keenclamps.php', 'Keen Clamp&reg;', 'img' => 'Clamp_WebReady.jpg'),
					array('pricing.php', 'Call us for pricing', 'img' => 'Trumpet_WebReady.jpg'),
//					array('buykeenclamps.php', '', 'img' => 'Clamp_WebReady.jpg'),
//					array('links.php', 'Links', 'img' => 'Violin_WebReady.jpg'),
				);

				$nav = "";
				foreach($navArr as $k => $v){
					$nav .= '<a href="'.$v[0].'" '.(($k === $page) ? ' class="sel" ' : '').'>'.$v[1].'';
				}
?>
<table id="page" cellspacing="0">
    <tr id="header">
        <td colspan="2"><p>PROUDLY SERVING TWIN CITIES MUSICIANS FOR OVER 30 YEARS</p></td>
    </tr>
    <tr>
        <td id="column_left">
			<div id="left_image"><img src="images/<?php echo (($navArr[$page]['img']) ? $navArr[$page]['img'] : 'Clamp_WebReady.jpg' ); ?>" border="0" width="243" height="131" alt="Guitar_WebReady.jpg" /></div>
			<div id="nav">
<?php echo $nav; ?>
			</div>
        </td>
        <td id="column_right">
