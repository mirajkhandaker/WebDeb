<?php
mkdir(__DIR__."/name1");
rename(__DIR__."/file_folder",'new_name');
var_dump(rmdir(__DIR__."/name1"));
var_dump(is_dir(__DIR__."/nation"));