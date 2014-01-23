<?php
include 'data.php';

$conn = mysql_connect('127.0.0.1',$username,$password)
or die ("Database connection failed. We're sorry.");

mysql_select_db($database, $conn)
or die ("Database selection failed. We're sorry.");

mysql_query("SET NAMES utf8");

$result1 = mysql_query("SELECT DISTINCT name FROM bundle ORDER BY id ASC");
$name = Array();
while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
    $name[] =  $row['name'];
}

$counter = 1;

foreach($name as &$curr)
{

$result2 = mysql_query("SELECT price, time FROM bundle WHERE name = '".$curr."'");
$data = Array();
$whilecount = 0;
while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	$data[$whilecount] = array(strtotime($row['time'])*1000 ,$row['price']*1);
	$whilecount++;
}

echo '





<div id="container'.$counter.'" style="height: 500px; min-width: 500px"></div>


<script>

var title'.$counter.' = "'.$curr.'";
var data'.$counter.' = '. json_encode($data).';


$(function() {

	
		// Create the chart
		$(\'#container'.$counter.'\').highcharts(\'StockChart\', {
			

			rangeSelector : {
				selected : 1
			},

			title : {
				text : title'.$counter.'
			},
			
			chart : {
			backgroundColor: \'#f2f2f2\'
			},
			series : [{
				name : title'.$counter.',
				data : data'.$counter.',
				tooltip: {
					valueDecimals: 2
				}
			}]
		});

});

</script>


';

$counter++;

}
?>
