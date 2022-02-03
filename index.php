<?php

require_once 'vendor/autoload.php';
use App\classes\StringWordCount;

$stringWordCount = new StringWordCount($_POST);
$stringWordCount->index();

