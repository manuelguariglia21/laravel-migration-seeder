<?php
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $new_travel = new Travel();
        $new_travel->name = 'Terre D’ ISLANDA 08 GIORNI/07 NOTTI';
        $new_travel->place = 'ISLANDA';
        $new_travel->description = 'un viaggio in un’isola magica ed affascinante, terra di fuoco e di ghiaccio tra vulcani attivi ed iceberg: questa è l’Islanda il Paese meno popolato d’Europa.';
        $new_travel->price = 2440;
        $new_travel->save();
    }
}
