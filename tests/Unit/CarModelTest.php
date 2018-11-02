<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\cars;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcarmodel()
    {
        $cars = cars::all();
        $car = cars::inRandomOrder()->first();
        if ($car->make = "Honda") {
            $this->assertTrue(true);
        } elseif ($car->make = "Toyota") {
            $this->assertTrue(true);
        } else ($car->make = "Ford");
        {
            $this->assertTrue(true);
        }
    }
}
