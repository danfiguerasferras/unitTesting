<?php

/**
 * Created by PhpStorm.
 * User: blader
 * Date: 12/11/16
 * Time: 10:44
 */
class Vegetable {

    var $edible;
    var $color;

    function __construct($edible, $color="green")
    {
        $this->edible = $edible;
        $this->color = $color;
    }

    function is_edible()
    {
        return $this->edible;
    }

    function what_color()
    {
        return $this->color;
    }

}