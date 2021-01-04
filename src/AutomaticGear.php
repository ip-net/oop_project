<?php


namespace oop_project;


class AutomaticGear extends Gear
{


    function gearUp()
    {
        echo "automatic gear up" . "\n";
        parent::gearUp();
    }

    function gearDown()
    {
        echo "automatic gear down" . "\n";
        parent::gearDown();
    }

    function reverse()
    {
        echo 'automatic gear reverse' . "\n";
        parent::reverse();
    }

    /*public function about()
    {
        echo 'Automatic gear. Model ' . $this->model . '\n';
    }*/
}