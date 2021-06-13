<?php


class MoveAblePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return float
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @return float
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param float $ySpeed
     */
    public function setYSpeed( $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    /**
     * @param float $xSpeed
     */
    public function setXSpeed( $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function move()
    {
        echo "Point was moved is : " . "<br>" .
            "x is :" . ($this->x = $this->x + $this->xSpeed) . "<br>" .
            "y is :" . ($this->y = $this->y + $this->ySpeed);
    }

}