<?php


namespace Tudy\Contact;

use Illuminate\Support\ServiceProvider;

/**
 * Class ContactServiceProvider
 * @package Tudy\Contact
 *
 *
 * Třídu zaregidtrovat v config/app.php do sekce providers
 *
 *
 */
class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // načte routy baličku
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        //načte views baličku
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');

        //načte migrace baličku
        $this->loadMigrationsFrom(__DIR__ . '/database/migration');

        //našte konfiguraci
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        /**
         * zveřejní configuraci do adresáře config/
         * php artisan vendor:public vypíše seznam balíčku ke zveřejenění
         * pak vybrat číslo balíšku a překopíruje se konfigurační soubor.
         */
        $this->publishes([
            __DIR__ . '/config/contact.php' => config_path('contact.php'),
        ]);
    }





    public function register()
    {

    }

}