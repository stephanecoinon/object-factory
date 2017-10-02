<?php

namespace Tests\Stubs;

use StephaneCoinon\ObjectFactory\BuiltByFactory;

class Popo
{
    use BuiltByFactory;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value;
        }
    }
}
