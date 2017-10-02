<?php

namespace StephaneCoinon\ObjectFactory;

use Illuminate\Database\Eloquent\Collection;

trait BuiltByFactory
{
    /**
     * Create a new Eloquent Collection instance.
     *
     * @param  array  $models
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new Collection($models);
    }
}
