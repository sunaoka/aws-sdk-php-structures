<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscription;

trait GetSubscriptionTrait
{
    /**
     * @param GetSubscriptionRequest $args
     * @return GetSubscriptionResponse
     */
    public function getSubscription(GetSubscriptionRequest $args)
    {
        $result = parent::getSubscription($args->toArray());
        return new GetSubscriptionResponse($result->toArray());
    }
}
