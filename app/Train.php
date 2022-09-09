<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Train extends Model
    {
        protected $table = 'trains_migration';
        protected $fillable = [
            'company',
            'departure_station',
            'arrival_station',
            'departure_time',
            'arrival_time',
            'train_code',
            'number_of_carriages',
            'is_in_time',
            'is_cancelled',
        ];
    }