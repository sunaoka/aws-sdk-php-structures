<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest;

trait RejectSubscriptionRequestTrait
{
    /**
     * @param RejectSubscriptionRequestRequest $args
     * @return RejectSubscriptionRequestResponse
     */
    public function rejectSubscriptionRequest(RejectSubscriptionRequestRequest $args)
    {
        $result = parent::rejectSubscriptionRequest($args->toArray());
        return new RejectSubscriptionRequestResponse($result->toArray());
    }
}
