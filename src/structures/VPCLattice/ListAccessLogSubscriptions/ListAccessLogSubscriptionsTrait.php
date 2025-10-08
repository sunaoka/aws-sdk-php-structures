<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListAccessLogSubscriptions;

trait ListAccessLogSubscriptionsTrait
{
    /**
     * @param ListAccessLogSubscriptionsRequest $args
     * @return ListAccessLogSubscriptionsResponse
     */
    public function listAccessLogSubscriptions(ListAccessLogSubscriptionsRequest $args)
    {
        $result = parent::listAccessLogSubscriptions($args->toArray());
        return new ListAccessLogSubscriptionsResponse($result->toArray());
    }
}
