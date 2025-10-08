<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeExceptionSubscription;

trait GetDataLakeExceptionSubscriptionTrait
{
    /**
     * @param GetDataLakeExceptionSubscriptionRequest $args
     * @return GetDataLakeExceptionSubscriptionResponse
     */
    public function getDataLakeExceptionSubscription(GetDataLakeExceptionSubscriptionRequest $args)
    {
        $result = parent::getDataLakeExceptionSubscription($args->toArray());
        return new GetDataLakeExceptionSubscriptionResponse($result->toArray());
    }
}
