<?php

namespace Tests\Feature;

use App\Models\Channel;
use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ChannelTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_channel_consists_of_threads()
    {
        $channel = Channel::factory()->create();
        $thread = Thread::factory(['channel_id' => $channel->id])->create();
        $this->assertTrue($channel->threads->contains($thread));
    }
}
