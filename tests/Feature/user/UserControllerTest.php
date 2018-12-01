<?php

namespace Tests\Feature\user;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserControllerTest extends TestCase
{
    /** @test */
    public function get_user() {
        $response = $this->json('GET', '/api/blog/user');

        $response->assertStatus(200);
        $response->assertJson([
            'name' => 'Somkiat',
            'age' => 30
        ]);
    }
}
