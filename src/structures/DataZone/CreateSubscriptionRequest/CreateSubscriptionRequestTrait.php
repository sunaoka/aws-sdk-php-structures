<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest;

trait CreateSubscriptionRequestTrait
{
    /**
     * @param CreateSubscriptionRequestRequest $args
     * @return CreateSubscriptionRequestResponse
     */
    public function createSubscriptionRequest(CreateSubscriptionRequestRequest $args)
    {
        $result = parent::createSubscriptionRequest($args->toArray());
        return new CreateSubscriptionRequestResponse($result->toArray());
    }
}
