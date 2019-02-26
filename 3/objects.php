<?php
$r = new Rectangle;
$r->setRectangle(mt_rand(5, 15),mt_rand(5, 15));
echo $r->CalcArea().'<br>';

$c = new Circle;
$c->SetRadius(mt_rand(5, 15));
echo $c->CalcArea().'<br>';

$t = new Triangle;
$t->SetTriangle(5, 7, 3);
echo $t->CalcArea();
?>