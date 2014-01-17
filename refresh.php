<?php
error_reporting(-1);
$mainBundleUrl = 'https://www.humblebundle.com/';

$mainSubtring = stristr(file_get_contents($mainBundleUrl), "price bta");

$mainPrice = substr($mainSubtring, 12, 4);  // assuming the value will always be four characters

date_default_timezone_set ('Europe/Berlin');

$date = date('Y-m-d H:i:s');



function page_title($url) {
        $fp = file_get_contents($url);
        if (!$fp) 
            return null;

        $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
        if (!$res) 
            return null; 

        // Clean up title: remove EOL's and excessive whitespace.
        $title = preg_replace('/\s+/', ' ', $title_matches[1]);
        $title = trim($title);
		$title = substr($title,0,strrpos($title, ' (pay what you want and help charity)'));
        return $title;
    }

$verbindung = mysql_connect('127.0.0.1','USER','PASSWORD') //Change this
or die ("Database connection failed. We're sorry.");

mysql_select_db("DATABASE-NAME", $verbindung) //And that
or die ("Database selection failed. We're sorry.");

mysql_query("SET NAMES utf8");

$mainTitle = page_title($mainBundleUrl);

$mainQuery = "INSERT INTO bundle (name, price, time)
VALUES ('".$mainTitle."',".strip_tags($mainPrice).",'".$date."');";

if(is_numeric(strip_tags($mainPrice))){
mysql_query($mainQuery);
}

echo $mainQuery.'<br>';

echo $mainTitle.'<br>';
echo $mainPrice.'<br>';
?>