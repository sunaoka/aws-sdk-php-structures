<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateAccessLogSubscription;

trait UpdateAccessLogSubscriptionTrait
{
    /**
     * @param UpdateAccessLogSubscriptionRequest $args
     * @return UpdateAccessLogSubscriptionResponse
     */
    public function updateAccessLogSubscription(UpdateAccessLogSubscriptionRequest $args)
    {
        $result = parent::updateAccessLogSubscription($args->toArray());
        return new UpdateAccessLogSubscriptionResponse($result->toArray());
    }
}
