<?php

namespace Sunaoka\Aws\Structures\Shield\GetSubscriptionState;

trait GetSubscriptionStateTrait
{
    /**
     * @param GetSubscriptionStateRequest $args
     * @return GetSubscriptionStateResponse
     */
    public function getSubscriptionState(GetSubscriptionStateRequest $args)
    {
        $result = parent::getSubscriptionState($args->toArray());
        return new GetSubscriptionStateResponse($result->toArray());
    }
}
