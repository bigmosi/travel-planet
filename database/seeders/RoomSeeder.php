<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
            [
              'hotel_id' => 1,
              'type' => 'Luxury Suite',
              'description' => '2000 sqft, 3 king sized beds, full kitchens.',
              'price' => 980.00,
              'image' => 'https://placimg.com/640/480/arch'
            ],
            [
                'hotel_id' => 1,
                'type' => 'Double',
                'description' => 'Two queen beds.',
                'price' => 200.00,
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
              'hotel_id' => 2,
              'type' => 'Suit',
              'description' => 'International luxurious room.',
              'price' => 350.00,
              'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'hotel_id' => 3,
                'type' => 'Economy',
                'description' => 'One queen bed, mini fridge.',
                'price' => 87.99,
                'image' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'hotel_id' => 3,
                'type' => 'Suite',
                'description' => 'One ultra wide king bed, full kitchen.',
                'price' => 399.00,
                'image' => 'https://placeimg.com/640/480/arch'
            ]
        ];
        foreach($rooms as $room) {
            room::create(array(
                'hotel_id' => $room['hotel_id'],
                'type' => $room['type'],
                'description' => $room['description'],
                'price' => $room['price'],
                'image' => $room['image']
        ));
        }
    }
}
