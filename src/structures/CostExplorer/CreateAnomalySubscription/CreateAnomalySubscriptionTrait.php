<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription;

trait CreateAnomalySubscriptionTrait
{
    /**
     * @param CreateAnomalySubscriptionRequest $args
     * @return CreateAnomalySubscriptionResponse
     */
    public function createAnomalySubscription(CreateAnomalySubscriptionRequest $args)
    {
        $result = parent::createAnomalySubscription($args->toArray());
        return new CreateAnomalySubscriptionResponse($result->toArray());
    }
}
