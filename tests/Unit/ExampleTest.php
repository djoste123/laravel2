<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Title;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
    /*
    public function testTitlesmodelCount(){
        
        $titles = new Title;
        $this->assertTrue(count($titles->all()) === 6, 'It should have six titles');
        
        //$value = 1;
        //$this->assertTrue(1 === $value, 'Value shoul be 1');
    }
    public function testLastTitleShouldBeProffessor(){
        $titles = new Title;
        $titles_array = $titles->all();
        $this->assertEquals('Professor', array_pop($titles_array), 'Ttiles last element should be Professor');
    }
     * 
     */
}
