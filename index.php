<?php

require_once 'vendor/autoload.php';

require 'AutoLoad.php';
AutoLoader::Register();

use Litipk\BigNumbers\Decimal;
use \Symfony\Component\VarDumper\Test\VarDumperTestTrait;


$un = Decimal::fromString('0.00255485684214703598');
$deux = Decimal::fromString('100');

$trois = $un->mul($deux);
$qq = $trois->mul(Decimal::fromString('12'));
echo($trois);
echo($qq);

dump($trois);
?>