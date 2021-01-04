<?php


namespace oop_project;


class MechanicGear extends Gear
{

    function gearUp()
    {
        echo 'mechanic gear up' . "\n";
        parent::gearUp();
    }

    function gearDown()
    {
        echo 'mechanic gear down' . "\n";
        parent::gearDown();
    }

    function reverse()
    {
        echo 'mechanic gear reverse' . "\n";
        parent::reverse();
    }
}

