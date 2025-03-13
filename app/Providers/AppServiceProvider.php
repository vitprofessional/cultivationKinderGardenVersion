<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ServerConfig;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function($view){
            $serverData = ServerConfig::orderBy('id','DESC')->limit(1)->first();
            if(!empty($serverData)):
                $serverId           = $serverData->id;
                $insName            = $serverData->institueName;
                $location           = $serverData->address;
                $officeMobile       = $serverData->officeMobile;
                $officeMail         = $serverData->officeEmail;
                $principalSign      = $serverData->principalSign;
                $logo               = $serverData->logo;
                $favicon            = $serverData->favicon;
                $avatar             = $serverData->avatar;
                $einNumber          = $serverData->einNumber;
                $establishDate      = $serverData->establishDate;
            else:
                $serverId           = "";
                $insName            = "Sonar Bangla College";
                $location           = "Poyat, Burichong, Cumilla";
                $officeMobile       = "01716841785";
                $officeMail         = "";
                $principalSign      = "";
                $logo               = "";
                $favicon            = "";
                $avatar             = "";
                $einNumber          = "434713";
                $establishDate      = "";
            endif;
            $view->with(['serverId'=>$serverId,'insName'=>$insName,'location'=>$location,'officeMobile'=>$officeMobile,'officeMail'=>$officeMail,'logo'=>$logo,'favicon'=>$favicon,'einNumber'=>$einNumber,'establishDate'=>$establishDate]);
        });
    }
}
