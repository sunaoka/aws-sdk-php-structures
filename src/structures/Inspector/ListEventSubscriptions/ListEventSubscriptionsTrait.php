<?php

namespace Sunaoka\Aws\Structures\Inspector\ListEventSubscriptions;

trait ListEventSubscriptionsTrait
{
    /**
     * @param ListEventSubscriptionsRequest $args
     * @return ListEventSubscriptionsResponse
     */
    public function listEventSubscriptions(ListEventSubscriptionsRequest $args)
    {
        $result = parent::listEventSubscriptions($args->toArray());
        return new ListEventSubscriptionsResponse($result->toArray());
    }
}
