<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateSubscription;

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
