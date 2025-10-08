<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLakeExceptionSubscription;

trait DeleteDataLakeExceptionSubscriptionTrait
{
    /**
     * @param DeleteDataLakeExceptionSubscriptionRequest $args
     * @return DeleteDataLakeExceptionSubscriptionResponse
     */
    public function deleteDataLakeExceptionSubscription(DeleteDataLakeExceptionSubscriptionRequest $args)
    {
        $result = parent::deleteDataLakeExceptionSubscription($args->toArray());
        return new DeleteDataLakeExceptionSubscriptionResponse($result->toArray());
    }
}
