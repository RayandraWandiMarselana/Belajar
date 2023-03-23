<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class AppEnvironmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAppEnv()
    {
        // cek jika environmentmya berada dimana statusnya
        if (App::environment(['testing', 'prod', 'dev'])) {
            // simpan code program
            self::assertTrue(true);
        }
    }
}
