<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
   
    /** @test */
    public function pagina_principal()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    /** @test */
    public function crea_usuarios()
    {
        $data= [
            'nombre'=> 'joaquin',
            'email' => 'joaquin@hotmail.es',
            'fecha_de_nacimiento'=> '2024-07-03'
        ];
        $response = $this->post('/saveData', $data);
        $response->assertStatus(302);
        $this->assertDatabaseHas('users',$data);

    }

}
