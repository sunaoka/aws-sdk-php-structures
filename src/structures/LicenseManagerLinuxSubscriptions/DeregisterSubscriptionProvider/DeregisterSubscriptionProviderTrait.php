<?php

namespace Sunaoka\Aws\Structures\LicenseManagerLinuxSubscriptions\DeregisterSubscriptionProvider;

trait DeregisterSubscriptionProviderTrait
{
    /**
     * @param DeregisterSubscriptionProviderRequest $args
     * @return DeregisterSubscriptionProviderResponse
     */
    public function deregisterSubscriptionProvider(DeregisterSubscriptionProviderRequest $args)
    {
        $result = parent::deregisterSubscriptionProvider($args->toArray());
        return new DeregisterSubscriptionProviderResponse($result->toArray());
    }
}
