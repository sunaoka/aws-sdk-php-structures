<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests;

trait ListSubscriptionRequestsTrait
{
    /**
     * @param ListSubscriptionRequestsRequest $args
     * @return ListSubscriptionRequestsResponse
     */
    public function listSubscriptionRequests(ListSubscriptionRequestsRequest $args)
    {
        $result = parent::listSubscriptionRequests($args->toArray());
        return new ListSubscriptionRequestsResponse($result->toArray());
    }
}
