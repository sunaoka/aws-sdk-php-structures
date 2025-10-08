<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteEventSubscription;

trait DeleteEventSubscriptionTrait
{
    /**
     * @param DeleteEventSubscriptionRequest $args
     * @return DeleteEventSubscriptionResponse
     */
    public function deleteEventSubscription(DeleteEventSubscriptionRequest $args)
    {
        $result = parent::deleteEventSubscription($args->toArray());
        return new DeleteEventSubscriptionResponse($result->toArray());
    }
}
