<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_students_index_route_is_available(): void
    {
        $this->getJson('/api/students')
            ->assertOk()
            ->assertExactJson([]);
    }
}
