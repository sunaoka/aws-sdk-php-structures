<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptions;

trait ListSubscriptionsTrait
{
    /**
     * @param ListSubscriptionsRequest $args
     * @return ListSubscriptionsResponse
     */
    public function listSubscriptions(ListSubscriptionsRequest $args)
    {
        $result = parent::listSubscriptions($args->toArray());
        return new ListSubscriptionsResponse($result->toArray());
    }
}
