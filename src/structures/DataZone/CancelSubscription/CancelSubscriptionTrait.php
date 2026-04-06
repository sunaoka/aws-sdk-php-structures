<?php

namespace Sunaoka\Aws\Structures\DataZone\CancelSubscription;

trait CancelSubscriptionTrait
{
    /**
     * @param CancelSubscriptionRequest $args
     * @return CancelSubscriptionResponse
     */
    public function cancelSubscription(CancelSubscriptionRequest $args)
    {
        $result = parent::cancelSubscription($args->toArray());
        return new CancelSubscriptionResponse($result->toArray());
    }
}
