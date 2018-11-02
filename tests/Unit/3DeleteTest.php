<?php

namespace Tests\Unit;
use Illuminate\Support\Facades\DB;
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
       $User = User::find(51);
        //$del->delete();
        //$this->assertDatabaseMissing('users',["name"=>$del->name]);
        DB::table('users')->where('id', '>', 50)->delete();
        $user = User::all();
       $this->assertDatabaseMissing('users',['id' => '51']);
    }
}
