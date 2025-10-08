<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\GetRegisteredSubscriptionProvider;

trait GetRegisteredSubscriptionProviderTrait
{
    /**
     * @param GetRegisteredSubscriptionProviderRequest $args
     * @return GetRegisteredSubscriptionProviderResponse
     */
    public function getRegisteredSubscriptionProvider(GetRegisteredSubscriptionProviderRequest $args)
    {
        $result = parent::getRegisteredSubscriptionProvider($args->toArray());
        return new GetRegisteredSubscriptionProviderResponse($result->toArray());
    }
}
