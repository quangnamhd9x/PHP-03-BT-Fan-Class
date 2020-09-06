<?php


class Fan
{
    private $SLOW;
    private $MEDIUM;
    private $FAST;
    private $speed;
    private $on;
    private $color;
    private $radius;

    public function __construct($on)
    {
        $this->SLOW = 1;
        $this->MEDIUM = 2;
        $this->FAST = 3;
        $this->speed = 10;
        $this->on = $on;
        $this->color = 'blue';
        $this->radius = 10;

    }

    public function getSLOW()
    {
        return $this->SLOW;
    }

    public function setSLOW($SLOW)
    {
        $this->SLOW = $SLOW;
    }

    public function getMEDIUM()
    {
        return $this->MEDIUM;
    }

    public function setMEDIUM($MEDIUM)
    {
        $this->MEDIUM = $MEDIUM;
    }

    public function getFAST()
    {
        return $this->FAST;
    }

    public function setFAST($FAST)
    {
        $this->FAST = $FAST;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function setOn($on)
    {
        $this->on = $on;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    function toString()
    {
        if ($this->on == true) {
            echo 'speed ' . $this->speed = $this->FAST . ' color ' . $this->color = 'yellow' . ' radius ' . $this->radius . ' fan is on';
        } else {
            echo 'speed ' . $this->speed = $this->SLOW . ' color ' . $this->color . ' radius ' . $this->radius = '5' . ' fan is off';
        }
    }
}