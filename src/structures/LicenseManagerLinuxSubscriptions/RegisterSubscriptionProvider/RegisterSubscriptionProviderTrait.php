<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\RegisterSubscriptionProvider;

trait RegisterSubscriptionProviderTrait
{
    /**
     * @param RegisterSubscriptionProviderRequest $args
     * @return RegisterSubscriptionProviderResponse
     */
    public function registerSubscriptionProvider(RegisterSubscriptionProviderRequest $args)
    {
        $result = parent::registerSubscriptionProvider($args->toArray());
        return new RegisterSubscriptionProviderResponse($result->toArray());
    }
}
