<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PageController
 */
class PageControllerTest extends TestCase
{


    /**
     * @test
     */
    public function about_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('about'));

$response->assertOk();
$response->assertViewIs('page.aboutus');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function blacklist_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('blacklist'));

$response->assertOk();
$response->assertViewIs('page.blacklist');
$response->assertViewHas('clients');
$response->assertViewHas('browsers');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function email_list_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('emaillist'));

$response->assertOk();
$response->assertViewIs('page.emaillist');
$response->assertViewHas('whitelist');
$response->assertViewHas('blacklist');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function index_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('pages.index'));

$response->assertOk();
$response->assertViewIs('page.index');
$response->assertViewHas('pages');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function internal_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('internal'));

$response->assertOk();
$response->assertViewIs('page.internal');
$response->assertViewHas('internal');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$page = factory(\App\Models\Page::class)->create();
$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('pages.show', ['id' => $page->id]));

$response->assertOk();
$response->assertViewIs('page.page');
$response->assertViewHas('page');

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function staff_returns_an_ok_response()
    {
$this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

$user = factory(\App\Models\User::class)->create();

$response = $this->actingAs($user)->get(route('staff'));

$response->assertOk();
$response->assertViewIs('page.staff');
$response->assertViewHas('staff');

        // TODO: perform additional assertions
    }

    // test cases...
}
