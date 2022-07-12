<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) //questa tecnica si chiama dependence injection
    {
        $newTrain = new Train();
        $newTrain->agency = ;
        $newTrain->departureStation =;
        $newTrain->arrivalStation =;
        $newTrain->date =;
        $newTrain->departureTime =;
        $newTrain->arrivalTime =;
        $newTrain->trainCode =;
        $newTrain->wagonNumber =;
        $newTrain->inTime =;
        $newTrain->cancelled =;

        $newTrain->save(); // salva la riga a DATABASE
    }
}
