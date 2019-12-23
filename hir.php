


<!DOCTYPE html>

<head>
 
</head>
<body>
<?php
$url = simplexml_load_file("https://eune.leagueoflegends.com/hu/rss.xml");

echo $url->channel[0];
?>
 
</body>
</html>