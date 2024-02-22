<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_return_a_success_response_for_valid_submission()
    {
        $payload = [
            'name' => 'Vishal',
            'email' => 'vishal.web8@gmail.com',
            'message' => 'Sample message'
        ];

        $response = $this->postJson('/api/submit', $payload);

        $response->assertStatus(Response::HTTP_CREATED)
                 ->assertJson(['message' => 'Submission received']);
    }
}
