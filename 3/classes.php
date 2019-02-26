<?php

class Rectangle
{
	private $ar;
	private $br;
	function setRectangle($ar, $br)
	{
		$this->ar = $ar;
		$this->br = $br;
	}
	function CalcArea ()
	{
		if ($this->ar == $this->br) {
		echo "Это квадрат";
		}
		elseif ($this->ar == 0 || $this->br == 0) {
		return 0;
		}
		else return $this->ar * $this->br;
	}
}
class Circle
{
	private $rc;
	function SetRadius($rc)
	{
		$this->rc = $rc;
	}
	function CalcArea ()
	{
		return $this->rc * $this->rc * M_PI;
	}
}
class Triangle
{
	private $at, $bt, $ct;
	function SetTriangle($at, $bt, $ct)
	{
		$this->at = $at;
		$this->bt = $bt;
		$this->ct = $ct;
	}
	function CalcArea ()
	{
		if (($this->at + $this->bt > $this->ct) && ($this->bt + $this->ct > $this->at) && ($this->ct + $this->at > $this->bt)) {
			$pp = ($this->at + $this->bt + $this-> ct) / 2;
			return sqrt($pp * ($pp -$this->at) * ($pp -$this->bt) * ($pp -$this->ct));
		}
		else return 0;
	}
}
include 'objects.php';
?>



