<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $del =User:: find(22);
        $del->delete();
        $this->assertDatabaseMissing('users',["name"=>$del->name]);
    }
}
