<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $denominations = [
            [
                'type'  =>  'BILL',
                'value' =>  100,
            ], [
                'type'  =>  'BILL',
                'value' =>  50,
            ], [
                'type'  =>  'BILL',
                'value' =>  20,
            ], [
                'type'  =>  'BILL',
                'value' =>  10,
            ], [
                'type'  =>  'BILL',
                'value' =>  5,
            ], [
                'type'  =>  'BILL',
                'value' =>  1,
            ], [
                'type'  =>  'COIN',
                'value' =>  0.5,
            ], [
                'type'  =>  'COIN',
                'value' =>  0.25,
            ], [
                'type'  =>  'COIN',
                'value' =>  0.1,
            ], [
                'type'  =>  'OTHER',
                'value' =>  0,
            ],
        ];

        collect($denominations)
            ->each(function ($denomination) {
                Denomination::create($denomination);
            });
    }
}
