<?php
require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$logger = new Logger('info');
$logger->pushHandler(new StreamHandler(__DIR__ . '/log_file.log', Level::Debug));
$logger->info('my very first log message to file');
$logger->error('This is an error happened',['username' => 'faisal']);

$loggerOrders = new Logger('orders');
$loggerOrders->pushHandler(new StreamHandler(__DIR__ . '/log_file.log', Level::Debug));
$loggerOrders->warning('Orders has no address');