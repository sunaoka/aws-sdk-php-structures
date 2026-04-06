<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription;

trait RevokeSubscriptionTrait
{
    /**
     * @param RevokeSubscriptionRequest $args
     * @return RevokeSubscriptionResponse
     */
    public function revokeSubscription(RevokeSubscriptionRequest $args)
    {
        $result = parent::revokeSubscription($args->toArray());
        return new RevokeSubscriptionResponse($result->toArray());
    }
}
