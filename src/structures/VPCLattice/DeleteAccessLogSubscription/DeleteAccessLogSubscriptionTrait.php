<?php

namespace Sunaoka\Aws\Structures\VPCLattice\DeleteAccessLogSubscription;

trait DeleteAccessLogSubscriptionTrait
{
    /**
     * @param DeleteAccessLogSubscriptionRequest $args
     * @return DeleteAccessLogSubscriptionResponse
     */
    public function deleteAccessLogSubscription(DeleteAccessLogSubscriptionRequest $args)
    {
        $result = parent::deleteAccessLogSubscription($args->toArray());
        return new DeleteAccessLogSubscriptionResponse($result->toArray());
    }
}
