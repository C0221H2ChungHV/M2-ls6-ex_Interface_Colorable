<?php
include_once 'Colorable.php';
include_once 'Rectangle.php';

class Square extends Rectangle implements Colorable
{
    public function __construct($width)
    {
        parent::__construct($width, $width);
    }

    public function howToColor()
    {
        return 'Color all four sides..';
    }

}
