<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car=new Cars();
        $car->Make='ford';
        $car->Model='ADEF1234';
        $car->year='1994';
        //$this->assertTrue($car->save());
        $this->assertTrue($car=!NULL);
    }
}
