<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\{ User, Comment };

class UserTest extends TestCase
{
    public function testCanAppendComment()
    {
        $user = User::factory()->create();
        $this->json('POST', 'api/', ['id' => $user->id, 'comment' => 'test comment', 'password' => '720DF6C2482218518FA20FDC52D4DED7ECC043AB'])
            ->assertStatus(200)
            ->assertJson(['OK.']);
    }
}
