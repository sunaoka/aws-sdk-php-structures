<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StopProductSubscription;

trait StopProductSubscriptionTrait
{
    /**
     * @param StopProductSubscriptionRequest $args
     * @return StopProductSubscriptionResponse
     */
    public function stopProductSubscription(StopProductSubscriptionRequest $args)
    {
        $result = parent::stopProductSubscription($args->toArray());
        return new StopProductSubscriptionResponse($result->toArray());
    }
}
