<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateNotificationSubscription;

trait CreateNotificationSubscriptionTrait
{
    /**
     * @param CreateNotificationSubscriptionRequest $args
     * @return CreateNotificationSubscriptionResponse
     */
    public function createNotificationSubscription(CreateNotificationSubscriptionRequest $args)
    {
        $result = parent::createNotificationSubscription($args->toArray());
        return new CreateNotificationSubscriptionResponse($result->toArray());
    }
}
