<?php

namespace Tests;

use Illuminate\Database\Eloquent\Collection;
use Tests\Stubs\Popo;
use Tests\TestCase;

class BuiltByFactoryTest extends TestCase
{
    /** @test */
    function plain_object_can_be_built_by_a_factory()
    {
        $popo = factory(Popo::class)->make(['age' => 42]);

        $this->assertInstanceOf(Popo::class, $popo);
        $this->assertNotNull($popo->name);
        $this->assertEquals(42, $popo->age);
    }

    /** @test */
    function a_collection_of_plain_objects_can_be_built_by_factory()
    {
        $popos = factory(Popo::class, 3)->make();

        $this->assertInstanceOf(Collection::class, $popos);
        $this->assertCount(3, $popos);
        $this->assertContainsOnlyInstancesOf(Popo::class, $popos);
    }
}
