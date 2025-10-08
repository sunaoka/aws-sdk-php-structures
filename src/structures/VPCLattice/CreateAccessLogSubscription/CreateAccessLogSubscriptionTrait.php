<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateAccessLogSubscription;

trait CreateAccessLogSubscriptionTrait
{
    /**
     * @param CreateAccessLogSubscriptionRequest $args
     * @return CreateAccessLogSubscriptionResponse
     */
    public function createAccessLogSubscription(CreateAccessLogSubscriptionRequest $args)
    {
        $result = parent::createAccessLogSubscription($args->toArray());
        return new CreateAccessLogSubscriptionResponse($result->toArray());
    }
}
