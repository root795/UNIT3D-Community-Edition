<?php

namespace Tests\Feature\Http\Controllers\Staff;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Staff\HomeController
 */
class HomeControllerTest extends TestCase
{


    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('staff.dashboard.index'));

$response->assertOk();
$response->assertViewIs('Staff.dashboard.index');
$response->assertViewHas('num_user');
$response->assertViewHas('banned');
$response->assertViewHas('validating');
$response->assertViewHas('num_torrent');
$response->assertViewHas('pending');
$response->assertViewHas('rejected');
$response->assertViewHas('peers');
$response->assertViewHas('seeders');
$response->assertViewHas('leechers');
$response->assertViewHas('reports_count');
$response->assertViewHas('certificate');
$response->assertViewHas('uptime');
$response->assertViewHas('ram');
$response->assertViewHas('disk');
$response->assertViewHas('avg');
$response->assertViewHas('basic');
$response->assertViewHas('file_permissions');
$response->assertViewHas('app_count');

        // TODO: perform additional assertions
    }

    // test cases...
}
