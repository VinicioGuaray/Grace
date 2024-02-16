<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('roles')->insert([
          'Nombre'=>"Administrador",
               'Nivel'=>0
                ]
        );
        //
        /*
        $faker= Faker::create(); 
        for ($i=0;$i<=){
        
            
        }
         
         */
        }
    }

