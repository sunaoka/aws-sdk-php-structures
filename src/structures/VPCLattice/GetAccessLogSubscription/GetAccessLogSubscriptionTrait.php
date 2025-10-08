<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAccessLogSubscription;

trait GetAccessLogSubscriptionTrait
{
    /**
     * @param GetAccessLogSubscriptionRequest $args
     * @return GetAccessLogSubscriptionResponse
     */
    public function getAccessLogSubscription(GetAccessLogSubscriptionRequest $args)
    {
        $result = parent::getAccessLogSubscription($args->toArray());
        return new GetAccessLogSubscriptionResponse($result->toArray());
    }
}
