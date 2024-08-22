<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase {
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hello_hydra() {
        $response = $this->get('/api/status');

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => true,
            ]);
    }

    public function test_hydra_version() {
        $response = $this->get('/api/version');

        $response
            ->assertStatus(200)
            ->assertJson([
                'version' => true,
            ]);
    }
}
