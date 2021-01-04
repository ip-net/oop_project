<?php


namespace oop_project;



class Vehicle implements MovableInterface
{
    private $model;
    private $gear;
    private $engine;

    public function __construct(CarTypesInterface $model, GearInterface $gear, EngineInterface $engine)
    {

        $this->model = $model;
        $this->gear = $gear;
        $this->engine = $engine;
        /*$model->type();
        $model->color();

        $engine->startEngine();

        $gear->gearUp();
        $this->move();

        $gear->gearUp();
        $this->move();

        $gear->gearDown();
        $this->move();

        $gear->gearDown();
        $this->move();

        $this->stop();

        $gear->reverse();
        $this->move();

        $this->stop();

        $engine->stopEngine();*/
    }

    function modelInfo()
    {
    $this->model->type();
    $this->model->color();
    $this->model->maxSpeed();
    }

    function move()
    {
        echo "Start moving \n";
        $this->engine->startEngine();

        $this->gear->gearUp();

        $this->gear->gearUp();

        $this->gear->gearDown();

        $this->gear->gearDown();

        $this->gear->reverse();

    }

    function stop()
    {
        echo "Stop moving \n";
        $this->engine->stopEngine();
    }


    /*GearInterface, EngineInterface, ModelsInterface
    function startEngine()
    {
        // TODO: Implement startEngine() method.
    }

    function stopEngine()
    {
        // TODO: Implement stopEngine() method.
    }

    function gearUp()
    {
        // TODO: Implement gearUp() method.
    }

    function gearDown()
    {
        // TODO: Implement gearDown() method.
    }

    function reverse()
    {
        // TODO: Implement reverse() method.
    }

    function type()
    {
        // TODO: Implement type() method.
    }

    function color()
    {
        // TODO: Implement color() method.
    }*/
}