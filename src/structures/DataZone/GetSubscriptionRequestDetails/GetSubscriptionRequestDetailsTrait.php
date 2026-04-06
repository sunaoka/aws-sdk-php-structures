<?php

namespace Sunaoka\Aws\Structures\DataZone\GetSubscriptionRequestDetails;

trait GetSubscriptionRequestDetailsTrait
{
    /**
     * @param GetSubscriptionRequestDetailsRequest $args
     * @return GetSubscriptionRequestDetailsResponse
     */
    public function getSubscriptionRequestDetails(GetSubscriptionRequestDetailsRequest $args)
    {
        $result = parent::getSubscriptionRequestDetails($args->toArray());
        return new GetSubscriptionRequestDetailsResponse($result->toArray());
    }
}
