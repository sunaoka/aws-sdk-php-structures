<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\DeactivateSubscription;

trait DeactivateSubscriptionTrait
{
    /**
     * @param DeactivateSubscriptionRequest $args
     * @return DeactivateSubscriptionResponse
     */
    public function deactivateSubscription(DeactivateSubscriptionRequest $args)
    {
        $result = parent::deactivateSubscription($args->toArray());
        return new DeactivateSubscriptionResponse($result->toArray());
    }
}
