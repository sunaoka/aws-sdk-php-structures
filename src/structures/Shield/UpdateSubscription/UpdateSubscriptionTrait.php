<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateSubscription;

trait UpdateSubscriptionTrait
{
    /**
     * @param UpdateSubscriptionRequest $args
     * @return UpdateSubscriptionResponse
     */
    public function updateSubscription(UpdateSubscriptionRequest $args)
    {
        $result = parent::updateSubscription($args->toArray());
        return new UpdateSubscriptionResponse($result->toArray());
    }
}
