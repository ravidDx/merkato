<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test  */
    function testIndex()
    {
        $this->get('/usuario')
          ->assertStatus(200)
          ->assertSee('Perfil del usuario')
          ->assertSee('Pepe')
          ->assertSee('Luis');
    }
    
    /** @test  */
    function testShow()
    {
        $this->get('/usuario/2')
          ->assertStatus(200)
          ->assertSee('Detalles del usuario: 2');
    }

    /** @test  */
    function testCreate()
    {
        $this->get('/usuario/nuevo')
          ->assertStatus(200)
          ->assertSee('Crear nuevo usuario');
    }
}
