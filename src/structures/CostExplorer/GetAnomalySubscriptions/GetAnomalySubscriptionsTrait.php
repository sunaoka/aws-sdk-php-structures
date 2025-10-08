<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalySubscriptions;

trait GetAnomalySubscriptionsTrait
{
    /**
     * @param GetAnomalySubscriptionsRequest $args
     * @return GetAnomalySubscriptionsResponse
     */
    public function getAnomalySubscriptions(GetAnomalySubscriptionsRequest $args)
    {
        $result = parent::getAnomalySubscriptions($args->toArray());
        return new GetAnomalySubscriptionsResponse($result->toArray());
    }
}
