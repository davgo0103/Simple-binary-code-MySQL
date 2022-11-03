<?php
require_once("dbtools.inc.php");
echo("<h1>狗狗!!!!!</h1>");
echo("<a href='./index.php'>
    <button> 返回 </button>
	</a>");

$link=create_connection();
$sql="SELECT `ID`, `DATA` FROM `music` WHERE ID = 1";
$result=execute_sql("audio", $sql, $link);
$row = mysql_fetch_row($result);

file_put_contents('audio.mp3', base64_decode($row[1]));
$myAudioFile = "./audio.mp3";
echo '<EMBED SRC="'.$myAudioFile.'" HIDDEN="TRUE" AUTOSTART="TRUE"></EMBED>';

mysql_close($link);

?>