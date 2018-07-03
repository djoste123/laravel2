<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testNewClientForm(){
        $responce = $this->get('/clients/new');
        $responce->assertStatus(200);
    }
    public function testProffesorOption(){
        $responce = $this->get('/clients/new');
        $this->assertContains('Professor', $responce->getContent(), 'HTML should contain Professor');
    }
}
