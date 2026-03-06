<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateSubscription;

trait CreateSubscriptionTrait
{
    /**
     * @param CreateSubscriptionRequest $args
     * @return CreateSubscriptionResponse
     */
    public function createSubscription(CreateSubscriptionRequest $args)
    {
        $result = parent::createSubscription($args->toArray());
        return new CreateSubscriptionResponse($result->toArray());
    }
}
