<?php
echo 'Builder';

include 'lib\product.php';
include 'lib\builder\director.php';
include 'lib\builder\arm.php';
include 'lib\builder\leg.php';
include 'lib\builder\eye.php';
include 'lib\builder\human.php';
include 'lib\builder\builderinterface.php';
include 'lib\builder\humanbuilder.php';

$b = new \PhpPatterns\Builder\Director();
$human = $b->build(new \PhpPatterns\Builder\HumanBuilder());
echo "<pre>";
echo var_export($human, false);
echo "</pre>";