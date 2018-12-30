<?php
$file = fopen("../server/data.txt","w") or die ("Unable to open file!");
fwrite($file, $_POST['text']);
fclose($file);

die('file has been saved');
?>