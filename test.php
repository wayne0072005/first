<?php

require_once __DIR__ . '/vendor/autoload.php';
use Library\Custom\Commonfunction;
$test = new Commonfunction();
echo $test->real_ip();
echo $test->world();
