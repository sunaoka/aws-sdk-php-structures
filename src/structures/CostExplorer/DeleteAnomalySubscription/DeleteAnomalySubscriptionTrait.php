<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteAnomalySubscription;

trait DeleteAnomalySubscriptionTrait
{
    /**
     * @param DeleteAnomalySubscriptionRequest $args
     * @return DeleteAnomalySubscriptionResponse
     */
    public function deleteAnomalySubscription(DeleteAnomalySubscriptionRequest $args)
    {
        $result = parent::deleteAnomalySubscription($args->toArray());
        return new DeleteAnomalySubscriptionResponse($result->toArray());
    }
}
