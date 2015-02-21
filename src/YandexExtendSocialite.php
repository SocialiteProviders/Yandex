<?php
namespace SocialiteProviders\Yandex;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YandexExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('yandex', __NAMESPACE__.'\Provider');
    }
}
