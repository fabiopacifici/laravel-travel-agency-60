<?php

use Illuminate\Database\Seeder;
use App\Travel;
class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel_list = config('db.travel');

        foreach ($travel_list as $travel) {
            $new_travel = new Travel();
            $new_travel->location = $travel['location'];
            $new_travel->price = $travel['price'];
            $new_travel->days = $travel['days'];
            $new_travel->image = $travel['image'];
            $new_travel->type = $travel['type'];
            $new_travel->save();
        }
    }
}
