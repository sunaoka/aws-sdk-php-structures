<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteEventSubscription;

trait DeleteEventSubscriptionTrait
{
    /**
     * @param DeleteEventSubscriptionRequest $args
     * @return void
     */
    public function deleteEventSubscription(DeleteEventSubscriptionRequest $args)
    {
        parent::deleteEventSubscription($args->toArray());
    }
}
