<?php

use Illuminate\Database\Seeder;

class HeroClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Mago',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Sacerdote',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Lutador',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Mago',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Arqueiro',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Cavaleiro',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Lutador',
        ]);
        factory(App\HeroClass::class, 1)->create([
            'name' => 'Espadachim',
        ]);

    }
}
