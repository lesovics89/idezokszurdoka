<style type="text/css">
<!--
@import url("https://fonts.googleapis.com/css?family=Playball&subset=latin-ext");

body {
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	color: #3D3D3D;
	font-size: 20px;
	font-family: Arial;
	display: flex;
	
	margin-bottom: -50px;
	
  }


-->
</style>
<?php
    header ('Content-type: text/html; charset=utf-8');
	$jsonData=file_get_contents("https://feed2json.org/convert?url=https%3A%2F%2Feune.leagueoflegends.com%2Fhu%2Frss.xml&minify=on");
	
	$json=json_decode($jsonData,true);
	
    $m="<br>";
	
    $l="<p>&nbsp;</p>";
	$k="&nbsp;";
	echo $json['data']['Aatrox']['name'],$m;
	echo $json['data']['Aatrox']['blurb'];
	echo $json['data']['Aatrox']['image']['full'];
		
?>
	<?php
$rss_feed = simplexml_load_file("rss.json");
if(!empty($rss_feed)) {
$i=0;
foreach ($rss_feed->channel->item as $feed_item) {
if($i>=10) break;
?>
<div><a class="feed_title" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a></div>
<div><?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?></div>
<?php		
$i++;	
}}
?>


	
	
	
	
	
	
	
   	
	
	
	
	
	






