<?php

use Illuminate\Database\Seeder;
use App\Viaggio;
use Faker\Generator as Faker;

class ViaggiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++ ){
            $metodi_viaggio = [
                'Treno',
                'Aereo',
                'Nave',
                'Bici',
                'Macchina'
            ];
            $tempo = [
                'Nuvoloso',
                'Tempesta',
                'Neve',
                'Soleggiato',
                'Sereno',
            ];

            $new_viaggio = new Viaggio();
            $new_viaggio->partenza = $faker->city();
            $new_viaggio->arrivo = $faker->city();
            $new_viaggio->metodo_viaggio = $faker->randomElement($metodi_viaggio);
            $new_viaggio->meteo = $faker->randomElement($tempo);
            $new_viaggio->persone = $faker->rand(1,8);
            $new_viaggio->amount = $faker->rand(50, 2000);
            $new_viaggio->description = $faker->text(500);
            $new_viaggio->km = $faker->rand(500, 10000);
            $new_viaggio->pranzo_bordo = $faker->rand(0,1);
            $new_viaggio->save();
        }
    }
}
