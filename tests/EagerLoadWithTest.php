<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class EagerLoadWithTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testEagerLoadWithUserAndGroup()
    {
        $groups = factory(App\Group::class, 3)
           ->create()
           ->each(function ($g) {
                $g->users()->save(factory(App\User::class)->make());
            });

        $this->assertNotNull(App\User::first());
    }
}
