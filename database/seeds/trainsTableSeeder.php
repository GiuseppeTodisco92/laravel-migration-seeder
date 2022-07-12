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
        for($i = 0; $i < 10; $i++){
            $agency = ['trenitalia','italo','frecciarossa','thello'];
            $cityDeparture = ['Milano','Bari','Roma','Bisceglie','Molfetta'];
            $cityarrival =['Genova','Perugia','Roma','Torino','Venezia'];
            $newTrain = new Train();
            $newTrain->agency = $agency[rand(0,3)] ;
            $newTrain->departureStation = $cityDeparture[rand(0,4)] ; 
            $newTrain->arrivalStation = $cityarrival[rand(0,4)] ;
            $newTrain->date = '2022-07-12';
            $newTrain->departureTime = $faker->time();
            $newTrain->arrivalTime = $faker->time();
            $newTrain->trainCode = rand(2000,5000);
            $newTrain->wagonNumber = rand(5,12);
            $newTrain->inTime = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
    
            $newTrain->save(); // salva la riga a DATABASE

        }
       
    }
}
