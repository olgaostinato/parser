<?php
require ('autoload.php');

use controllers\api\ParserController;

$url = strtok($_SERVER['REQUEST_URI'],'?');
$route = explode('/', $url)[2];

if ($route == 'parser') {
    return (new ParserController())->getCountTags();
}
