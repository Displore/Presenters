<?php

namespace Displore\Presenters;

abstract class Presenter
{
    /**
     * The presentable model.
     * 
     * @var object
     */
    protected $model;

    /**
     * Create a new presenter instance.
     * 
     * @param  $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * This allows for property-style retrieval.
     *
     * @param $property
     *
     * @return mixed
     */
    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }
    }
}
