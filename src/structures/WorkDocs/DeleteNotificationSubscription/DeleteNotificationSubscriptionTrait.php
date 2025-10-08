<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteNotificationSubscription;

trait DeleteNotificationSubscriptionTrait
{
    /**
     * @param DeleteNotificationSubscriptionRequest $args
     * @return void
     */
    public function deleteNotificationSubscription(DeleteNotificationSubscriptionRequest $args)
    {
        parent::deleteNotificationSubscription($args->toArray());
    }
}
