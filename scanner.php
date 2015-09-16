<?php

/**
 * HTML to PHP page converter
 * convert HTML pages to PHP pages and replace all link inside pages
 * @author Alessandro Manno <alexmanno96@gmail.com>
 */

$old_dir = 'html_dir/';
$new_dir = 'php_dir/';
if(!is_dir($newdir))
    mkdir($newdir);
$files = scandir($old_dir);
function sostituisci($v)
{
    return str_replace('.html', '.php', $v);
}
function converti($file)
{
    $old_dir = $GLOBALS['old_dir'];
    $new_dir = $GLOBALS['new_dir'];
    $cont = file_get_contents($old_dir.$file);
    file_put_contents($new_dir.sostituisci($file), sostituisci($cont));
}
foreach($files as $k)
	if(is_file($old_dir.$k) && substr($k, -5,5) == ".html")
		converti($k);



?>
