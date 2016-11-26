<?php
include_once "/var/www/html/unitTesting/entities/Vegetable.php";
/**
 * Created by PhpStorm.
 * User: blader
 * Date: 12/11/16
 * Time: 11:03
 */
class VegetableTest extends PHPUnit_Framework_TestCase
{
    protected $edible = 'edible';
    protected $color = 'color';

    public function testCreateVegetable(){
        $information = [
            $this->edible => true,
            $this->color => 'green'
        ];

        $testVegetable = new Vegetable($information[$this->edible], $information[$this->color]);
        $this->assertEquals($information[$this->color], $testVegetable->color);
        $this->assertEquals($information[$this->edible], $testVegetable->edible);
    }

    public function testWhatColor(){
        $color = 'blue';
        $defaultColor = 'green';
        $vegetableWithoutColorParameter = new Vegetable(true);
        $vegetableWithColorParameter = new Vegetable(true, $color);

        $this->assertEquals($defaultColor, $vegetableWithoutColorParameter->what_color());
        $this->assertEquals($color, $vegetableWithColorParameter->what_color());
    }

    public function testIsEdible(){
        $vegetable1 = new Vegetable(true);
        $vegetable2 = new Vegetable(false);

        $this->assertEquals(true, $vegetable1->is_edible());
        $this->assertEquals(false, $vegetable2->is_edible());
    }
}
