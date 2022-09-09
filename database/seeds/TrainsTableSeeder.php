<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Italo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '19:20:00',
                'arrival_time' => '00:20:00',
                'train_code' => '9962',
                'number_of_carriages' => 8,
                'is_in_time' => 0,
                'is_cancelled' => 0,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '16:10:00',
                'arrival_time' => '19:49:00',
                'train_code' => '9551',
                'number_of_carriages' => 11,
                'is_in_time' => 1,
                'is_cancelled' => 0,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '08:00:00',
                'arrival_time' => '13:00:00',
                'train_code' => '9552',
                'number_of_carriages' => 11,
                'is_in_time' => 1,
                'is_cancelled' => 0,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '08:00:00',
                'arrival_time' => '13:00:00',
                'train_code' => '9961',
                'number_of_carriages' => 7,
                'is_in_time' => 1,
                'is_cancelled' => 0,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '10:00:00',
                'arrival_time' => '15:00:00',
                'train_code' => '9553',
                'number_of_carriages' => 5,
                'is_in_time' => 0,
                'is_cancelled' => 0,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Agropoli',
                'departure_time' => '06:00:00',
                'arrival_time' => '08:28:00',
                'train_code' => '8191',
                'number_of_carriages' => 3,
                'is_in_time' => 1,
                'is_cancelled' => 0,
            ]
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_of_carriages = $train['number_of_carriages'];
            $newTrain->is_in_time = $train['is_in_time'];
            $newTrain->is_cancelled = $train['is_cancelled'];
            $newTrain->save();
        }
    }
}
