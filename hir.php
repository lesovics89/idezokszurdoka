
<?php
$url = 'https://eune.leagueoflegends.com/hu/rss.xml';

$movies = new SimpleXMLElement($url);

echo $movies;
?>
