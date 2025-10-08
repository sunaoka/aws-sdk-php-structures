<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListLogSubscriptions;

trait ListLogSubscriptionsTrait
{
    /**
     * @param ListLogSubscriptionsRequest $args
     * @return ListLogSubscriptionsResponse
     */
    public function listLogSubscriptions(ListLogSubscriptionsRequest $args)
    {
        $result = parent::listLogSubscriptions($args->toArray());
        return new ListLogSubscriptionsResponse($result->toArray());
    }
}
