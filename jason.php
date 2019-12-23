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
    
	$jsonData=file_get_contents("https://eune.leagueoflegends.com/hu/rss.xml");
	$json=json_decode($jsonData,true);
    $m="<br>";
	
    $l="<p>&nbsp;</p>";
	$k="&nbsp;";
	
	
	
	echo $json['title'][0];
	
?>
	
	
	
	
	
	
	
	
	
   	
	
	
	
	
	






