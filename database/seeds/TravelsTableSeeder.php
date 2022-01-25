<?php
use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i<100; $i++){
            $new_travel = new Travel();
            $new_travel->name = $faker->sentence();
            $new_travel->place = $faker->state();
            $new_travel->description = $faker->paragraph();
            $new_travel->price = $faker->numberBetween(900, 5000);
            $new_travel->save();
        }
        
    }
}
