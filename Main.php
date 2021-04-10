<?php

class Main
{
    public $circle;
    public $rect;
    public $square;
    public $arr = [];

    public function __construct($circle, $rect, $square)
    {
        $this->circle = $circle;
        $this->rect = $rect;
        $this->square = $square;
    }

    public function getMain()
    {
        array_push($this->arr, $this->circle, $this->rect, $this->square);
        return $this->arr;
    }
}
