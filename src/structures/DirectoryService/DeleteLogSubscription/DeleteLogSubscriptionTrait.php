<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteLogSubscription;

trait DeleteLogSubscriptionTrait
{
    /**
     * @param DeleteLogSubscriptionRequest $args
     * @return DeleteLogSubscriptionResponse
     */
    public function deleteLogSubscription(DeleteLogSubscriptionRequest $args)
    {
        $result = parent::deleteLogSubscription($args->toArray());
        return new DeleteLogSubscriptionResponse($result->toArray());
    }
}
