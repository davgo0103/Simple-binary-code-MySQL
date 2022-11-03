<?php
require_once("dbtools.inc.php");
echo("<h1>狗狗!!!!!</h1>");
echo("<a href='./play.php'>
    <button>前往播放器</button>
	</a>");

$myAudioFile = "./dog.mp3";
$byte_array = file_get_contents($myAudioFile);
$audio = base64_encode($byte_array);

$link=create_connection();
$sql="UPDATE `music` SET `ID`=1,`DATA`= '$audio' WHERE ID = 1";
$result=execute_sql("audio", $sql, $link);

mysql_close($link);

?>