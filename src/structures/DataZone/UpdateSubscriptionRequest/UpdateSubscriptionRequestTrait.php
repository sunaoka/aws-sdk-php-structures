<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionRequest;

trait UpdateSubscriptionRequestTrait
{
    /**
     * @param UpdateSubscriptionRequestRequest $args
     * @return UpdateSubscriptionRequestResponse
     */
    public function updateSubscriptionRequest(UpdateSubscriptionRequestRequest $args)
    {
        $result = parent::updateSubscriptionRequest($args->toArray());
        return new UpdateSubscriptionRequestResponse($result->toArray());
    }
}
