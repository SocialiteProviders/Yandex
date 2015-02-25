<?php
namespace SocialiteProviders\Yandex;

use SocialiteProviders\Manager\SocialiteWasCalled;

class YandexExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'yandex', __NAMESPACE__.'\Provider'
        );
    }
}
