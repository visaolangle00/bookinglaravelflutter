<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Client;
use App\Service;
use App\Stylist;
use App\Appointment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       $category1= Category::create(['name' =>'Haircut', 'icon' => 'scrissors', 'photo' => 'haircut.jpg' ]);
       $category1->services()->saveMany([
        new Service(['name' => 'Men haircut', 'price' =>5.0]),
        new Service(['name' => 'Woman haircut', 'price' =>35.0]),
       ]);

       $category2= Category::create(['name' =>'Shaving', 'icon' => 'knife', 'photo' => 'beard.jpg' ]);
       $category2->services()->saveMany([
        new Service(['name' => 'Shaving', 'price' =>40.0]),
       ]);
      
       $category3= Category::create(['name' =>'MakeUp', 'icon' => 'mask', 'photo' => 'makeup.jpg' ]);
       $category3->services()->saveMany([
        new Service(['name' => 'MakeUp for weddings', 'price' =>75.0]),
        new Service(['name' => 'MakeUp for events', 'price' =>55.0]),
       ]);
       
       $category4= Category::create(['name' =>'Shampoo', 'icon' => 'pump_soap', 'photo' => 'shampoo.jpg' ]);
       $category4->services()->saveMany([
        new Service(['name' => 'Hair wash', 'price' =>25.0]),
       
       ]);
      
      

       $category5= Category::create(['name' =>'Nails', 'icon' => 'hand_sparkles', 'photo' => 'nails.jpg' ]);
       $category5->services()->saveMany([
        new Service(['name' => 'Manicure', 'price' =>30.0]),
        new Service(['name' => 'Acrilic nails', 'price' =>75.0]),
 
       ]);
      
       $category6= Category::create(['name' =>'HairStyle', 'icon' => 'face', 'photo' => 'hairstyle.jpg' ]);
       $category6->services()->saveMany([
        new Service(['name' => 'HairStyle for weddings', 'price' =>35.0]),
        new Service(['name' => 'Hair dycing', 'price' =>30.0]),
       ]);
       
       $category7= Category::create(['name' =>'Waxing', 'icon' => 'airline_seat_legroom_extra', 'photo' => 'waxing.jpg' ]);
       $category7->services()->saveMany([
        new Service(['name' => 'Legs waxing', 'price' =>34.0]),
       ]);
      
       $category8= Category::create(['name' =>'Massage', 'icon' => 'person_booth', 'photo' => 'massage.jpg' ]);
       $category8->services()->saveMany([
        new Service(['name' => 'Full body waxing', 'price' =>75.0]),
        new Service(['name' => 'Full body massage', 'price' =>65.0]),
       ]);


       $stylist1= Stylist::create(['name' => 'Elly', 'photo' => 'stylist5.jpg', 'score' => 4.1]);
       $stylist1->services()->sync([3, 12, 11, 4]);
       $stylist2= Stylist::create(['name' => 'Clara', 'photo' => 'stylist6.jpg', 'score' => 4.3]);
       $stylist2->services()->sync([9, 3, 2 , 6, 4, 8, 13]);
       $stylist3= Stylist::create(['name' => 'Amy', 'photo' => 'stylist7.jpg', 'score' => 4.2]);
       $stylist3->services()->sync([9, 11, 5, 2, 6]);
       $stylist4= Stylist::create(['name' => 'Sara', 'photo' => 'stylist8.jpg', 'score' => 3.4]);
       $stylist4->services()->sync([13, 3, 12 , 9]);
       $stylist5= Stylist::create(['name' => 'Miriam', 'photo' => 'stylist9.jpg', 'score' => 3.3]);
       $stylist5->services()->sync([4, 1, 7, 3, 10]);
       $stylist6= Stylist::create(['name' => 'Mike', 'photo' => 'stylist1.jpg', 'score' => 4.5]);
       $stylist6->services()->sync([9, 7, 3]);
       $stylist7= Stylist::create(['name' => 'Frank', 'photo' => 'stylist2.jpg', 'score' => 3.6]);
       $stylist7->services()->sync([8, 11, 2, 9, 13, 3]);
       $stylist8= Stylist::create(['name' => 'George', 'photo' => 'stylist3.jpg', 'score' => 4.7]);
       $stylist8->services()->sync([12, 5, 6, 2, 10]);
       $stylist9= Stylist::create(['name' => 'John', 'photo' => 'stylist4.jpg', 'score' => 3.9]);
       $stylist9->services()->sync([6, 9, 13, 8, 4]);



       $client =Client::create(['name' => 'John Doe', 'phone' => '2321321321']);
       $appointment = new Appointment([
           'dated_at' => Carbon\Carbon::now(),
           'duration' => 60,
       ]);
       $appointment->client()->associate($client);
       $appointment->stylist()->associate($stylist4);
       $appointment->service()->associate($stylist4->services()->inRandomOrder()->first());
       $appointment->save();


      
     
      
     
    
     
      
    
      
      

        // $this->call(UserSeeder::class);
    }
}
