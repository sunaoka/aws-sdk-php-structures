<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\ActivateSubscription;

trait ActivateSubscriptionTrait
{
    /**
     * @param ActivateSubscriptionRequest $args
     * @return ActivateSubscriptionResponse
     */
    public function activateSubscription(ActivateSubscriptionRequest $args)
    {
        $result = parent::activateSubscription($args->toArray());
        return new ActivateSubscriptionResponse($result->toArray());
    }
}
