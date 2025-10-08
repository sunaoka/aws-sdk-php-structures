<?php

namespace Sunaoka\Aws\Structures\CostExplorer\UpdateAnomalySubscription;

trait UpdateAnomalySubscriptionTrait
{
    /**
     * @param UpdateAnomalySubscriptionRequest $args
     * @return UpdateAnomalySubscriptionResponse
     */
    public function updateAnomalySubscription(UpdateAnomalySubscriptionRequest $args)
    {
        $result = parent::updateAnomalySubscription($args->toArray());
        return new UpdateAnomalySubscriptionResponse($result->toArray());
    }
}
