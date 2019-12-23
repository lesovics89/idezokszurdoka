<?php
 
   
   $url = "https://eune.leagueoflegends.com/hu/rss.xml";
$xml = simplexml_load_file($url);
print_r($xml);
   
   ?>