<?php

	$page = 2;
	include('includes/header.php');

?>

	<div id="content">
		<!--<h1>Pricing</h1>-->
<?php
				$pricelist = '{"Woodwind Pricing (extensive cleaning may add extra charge)":{
								"Piccolo Repad":"$228","Alto Clarinet Repad":"$380","Bass Clarinet Repad":"$380",
								"B♭ Soprano Clarinet":"$228", "Flute and Clarinet Repad":"$228",
								"Bass Clarinet Repad":"$395","Oboe Repad":"$390","Piccolo Repad":"$228",
								"Alto Sax Repad":"$390", "Tenor Sax Repad":"$400","Bari Sax Repad":"$460",
								"Soprano Sax Repad":"$380", "Bassoon Repad":"$485","Notes":["Pro instruments start $50+ extra.",
								"All play condition work priced at $50 per hour."]},

								"Brass Pricing":{"Tumpet Flush": "$53",
								"Trombone Flush":"$83","French Horn Flush":"$83","Tuba Flush":"$140","Notes":[
								"All dent and soldering priced at $50 per hour."]},

								"Strings Pricing":{"Violin Bridge Replace":"$39",
								"Cello Bridge Replace":"$79","Bass Bridge Replace":"$145"},"Bow Rehair":{"Violin Fiberglass":"$31",
								"Violin Wood":"$44","Cello":"$44","Bass":"$50","Notes":[ "All gluing and structural work priced at $50 per hour."]},

								"Guitar Pricing":{"Basic Setup":"$50","Restring":"$25", "Bone Nut":"$70","Bone Saddle":"$75",
								"Bridge Re-Glue":"$91","Dress Frets Partial (3 Frets)":"$85","Dress Frets Full": "$140",
								"Notes":["All gluing, electronic and tuner work by estimate only."]}}';

				$pricelist = json_decode(strtr($pricelist, '', ''), true);

				$rtn .= '<table cellspacing="0" id="pricing">';
				foreach($pricelist as $key => $value){
					$i = 0;
					$rtn .= '<tr>
								<th colspan="2"><h2>'.$key.'</h2></th>
							</tr>';
					if(is_array($value)){
						foreach($value as $k => $v){
							++$i;
							if($k !== 'Notes'){
								$rtn .= '<tr '.((is_odd($i)) ? ' class="odd" ' : '').' >
											<td>'.$k.'</td>
											<td>'.$v.'</td>
										</tr>';
							}else{
								$rtn .= '<tr>
											<td colspan="2">';
												foreach($v as $str) $rtn .= $str.'<br />';
								$rtn .=		'</td>
										</tr>';
							}
						}
					}
				}
				$rtn .= '</table>';

				echo $rtn;
?>
    </div>

<?php include('includes/footer.php'); ?>
