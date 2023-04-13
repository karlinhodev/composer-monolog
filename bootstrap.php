<?php
require __DIR__ . '/vendor/autoload.php';

use Karlinhodev\Composer\ComposerTest;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
$log->warning((new ComposerTest)->Say('Karlinho'));
$log->error('Bar');