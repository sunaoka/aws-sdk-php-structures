<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccountSubscription;

trait CreateAccountSubscriptionTrait
{
    /**
     * @param CreateAccountSubscriptionRequest $args
     * @return CreateAccountSubscriptionResponse
     */
    public function createAccountSubscription(CreateAccountSubscriptionRequest $args)
    {
        $result = parent::createAccountSubscription($args->toArray());
        return new CreateAccountSubscriptionResponse($result->toArray());
    }
}
