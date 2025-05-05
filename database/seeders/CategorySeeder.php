<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data=['technology category','sports category' , 'fashion category' ];
        $date = fake()->dateTimeThisYear()->format('Y-m-d H:i:s');  // تأكد من تنسيق التاريخ بشكل صحيح
        foreach($data as $item)
        {
            Category::create([
                'name'=>$item,
                'slug'=>str::slug($item),
                'status'=>1,
                'created_at'=>$date,
                'updated_at'=>$date,
            ]);
        }
    }
}
