<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function index_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function check_title_of_index_page()
    {
        $this->visit('/')->see('Laravel');
    }
}
