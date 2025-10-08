<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteSubscriberNotification;

trait DeleteSubscriberNotificationTrait
{
    /**
     * @param DeleteSubscriberNotificationRequest $args
     * @return DeleteSubscriberNotificationResponse
     */
    public function deleteSubscriberNotification(DeleteSubscriberNotificationRequest $args)
    {
        $result = parent::deleteSubscriberNotification($args->toArray());
        return new DeleteSubscriberNotificationResponse($result->toArray());
    }
}
