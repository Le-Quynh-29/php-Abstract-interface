<?php
include_once ("ConcreteClass1.php");
$class = new ConcreteClass1;
$class->printOut();
echo $class->prefixValue('Foo_');