<?php
$handle = opendir(__DIR__."/nation");
var_dump(readdir($handle));
echo "<br />";
var_dump(readdir($handle));
echo "<br />";
var_dump(readdir($handle));
echo "<br />";
var_dump(readdir($handle));
echo "<br />";
closedir($handle);