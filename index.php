<?php

require_once 'vendor/autoload.php';

require 'AutoLoad.php';
AutoLoader::Register();

use Litipk\BigNumbers\Decimal;


$un = Decimal::fromString('0.00255485684214703598');
$deux = Decimal::fromString('12');

$trois = $un->mul($deux);

?>