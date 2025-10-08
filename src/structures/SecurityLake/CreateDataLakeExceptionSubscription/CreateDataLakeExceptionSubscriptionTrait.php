<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLakeExceptionSubscription;

trait CreateDataLakeExceptionSubscriptionTrait
{
    /**
     * @param CreateDataLakeExceptionSubscriptionRequest $args
     * @return CreateDataLakeExceptionSubscriptionResponse
     */
    public function createDataLakeExceptionSubscription(CreateDataLakeExceptionSubscriptionRequest $args)
    {
        $result = parent::createDataLakeExceptionSubscription($args->toArray());
        return new CreateDataLakeExceptionSubscriptionResponse($result->toArray());
    }
}
