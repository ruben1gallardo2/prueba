<?php

use App\Vuelo as vuelo;
use Illuminate\Database\Seeder;

class DatabaseSeederVuelo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(vuelo::class, 55)->create();
    }
}
