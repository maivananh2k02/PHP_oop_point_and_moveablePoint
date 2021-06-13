<?php


class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "x la: " . $this->x . "<br>" . "y la: " . $this->y;
    }
}