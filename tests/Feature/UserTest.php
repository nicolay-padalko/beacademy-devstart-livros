<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_edit_listing()
    {
        $response = $this->get('/listings/{listing}/edit')
            ->assertRedirect('/login');
    }

    public function test_listing()
    {
        $user = User::factory()->create();
        $response = $this->post('/users/authenticate', [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $this->actingAs($user);

        $response = $this->get('/listings/create');

        $response->assertStatus(200);
    }

    public function test_post_listing()
    {
        $user = User::factory()->create();
        $response = $this->post('/users/authenticate', [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $this->actingAs($user);

        $response = $this->call('POST', 'listings', array(
            '_token' => csrf_token(),
        ));

        $this->assertEquals(302, $response->getStatusCode(200));

    }

    public function test_authenticate_user()
    {

        $response = $this->post('/users/authenticate', [
            'name' => 'novouser',
            'email' => 'novouser@master.com',
            'password' => 'q1w2e3r4',
        ]);

        $this->assertEquals(302, $response->getStatusCode(200));



    }


}
