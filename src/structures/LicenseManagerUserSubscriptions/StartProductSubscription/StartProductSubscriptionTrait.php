<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription;

trait StartProductSubscriptionTrait
{
    /**
     * @param StartProductSubscriptionRequest $args
     * @return StartProductSubscriptionResponse
     */
    public function startProductSubscription(StartProductSubscriptionRequest $args)
    {
        $result = parent::startProductSubscription($args->toArray());
        return new StartProductSubscriptionResponse($result->toArray());
    }
}
