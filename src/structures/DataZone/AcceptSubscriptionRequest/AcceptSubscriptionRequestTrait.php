<?php

namespace Sunaoka\Aws\Structures\DataZone\AcceptSubscriptionRequest;

trait AcceptSubscriptionRequestTrait
{
    /**
     * @param AcceptSubscriptionRequestRequest $args
     * @return AcceptSubscriptionRequestResponse
     */
    public function acceptSubscriptionRequest(AcceptSubscriptionRequestRequest $args)
    {
        $result = parent::acceptSubscriptionRequest($args->toArray());
        return new AcceptSubscriptionRequestResponse($result->toArray());
    }
}
