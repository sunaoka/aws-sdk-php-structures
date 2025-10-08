<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriberNotification;

trait UpdateSubscriberNotificationTrait
{
    /**
     * @param UpdateSubscriberNotificationRequest $args
     * @return UpdateSubscriberNotificationResponse
     */
    public function updateSubscriberNotification(UpdateSubscriberNotificationRequest $args)
    {
        $result = parent::updateSubscriberNotification($args->toArray());
        return new UpdateSubscriberNotificationResponse($result->toArray());
    }
}
