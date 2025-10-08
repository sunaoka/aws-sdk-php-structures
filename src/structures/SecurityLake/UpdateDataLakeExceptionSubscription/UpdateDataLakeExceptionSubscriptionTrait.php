<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLakeExceptionSubscription;

trait UpdateDataLakeExceptionSubscriptionTrait
{
    /**
     * @param UpdateDataLakeExceptionSubscriptionRequest $args
     * @return UpdateDataLakeExceptionSubscriptionResponse
     */
    public function updateDataLakeExceptionSubscription(UpdateDataLakeExceptionSubscriptionRequest $args)
    {
        $result = parent::updateDataLakeExceptionSubscription($args->toArray());
        return new UpdateDataLakeExceptionSubscriptionResponse($result->toArray());
    }
}
