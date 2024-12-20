<?php
require 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$url = new \SarMayr\BasicUrl\MyUrl();
echo $url->slugify('https://www.esample.org', 'Das ist ein langer Text.');