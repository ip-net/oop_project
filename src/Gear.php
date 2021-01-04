<?php


namespace oop_project;


class Gear implements GearInterface
{

    function gearUp()
    {
        echo "Parent gear up \n";
    }

    function gearDown()
    {
        echo "Parent gear down \n";
    }

    function reverse()
    {
        echo "Reverse \n";
    }
}