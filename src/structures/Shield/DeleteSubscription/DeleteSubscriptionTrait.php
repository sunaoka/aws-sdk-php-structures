<?php

namespace Sunaoka\Aws\Structures\Shield\DeleteSubscription;

trait DeleteSubscriptionTrait
{
    /**
     * @param DeleteSubscriptionRequest $args
     * @return DeleteSubscriptionResponse
     */
    public function deleteSubscription(DeleteSubscriptionRequest $args)
    {
        $result = parent::deleteSubscription($args->toArray());
        return new DeleteSubscriptionResponse($result->toArray());
    }
}
