<?php

namespace Sunaoka\Aws\Structures\EKS\ListEksAnywhereSubscriptions;

trait ListEksAnywhereSubscriptionsTrait
{
    /**
     * @param ListEksAnywhereSubscriptionsRequest $args
     * @return ListEksAnywhereSubscriptionsResponse
     */
    public function listEksAnywhereSubscriptions(ListEksAnywhereSubscriptionsRequest $args)
    {
        $result = parent::listEksAnywhereSubscriptions($args->toArray());
        return new ListEksAnywhereSubscriptionsResponse($result->toArray());
    }
}
