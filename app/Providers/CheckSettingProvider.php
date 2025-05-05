<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class CheckSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        Setting::firstOr(function(){
            return Setting::create([
                'site_name' =>'news',
                'logo' =>'default',
                'favicon' =>'default',
                'email' =>'email@gmail.com',
                'facebook' =>'default',
                'twitter' =>'default',
                'instagram' =>'default',
                'youtupe' =>'default',
                'phone' =>'0595517216',
                'country' =>'default country',
                'city' =>'default city',
                'street' =>'default street',

            ]);
        });
    }
}
