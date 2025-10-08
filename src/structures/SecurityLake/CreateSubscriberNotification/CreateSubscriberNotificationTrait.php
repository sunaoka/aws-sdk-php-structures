<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriberNotification;

trait CreateSubscriberNotificationTrait
{
    /**
     * @param CreateSubscriberNotificationRequest $args
     * @return CreateSubscriberNotificationResponse
     */
    public function createSubscriberNotification(CreateSubscriberNotificationRequest $args)
    {
        $result = parent::createSubscriberNotification($args->toArray());
        return new CreateSubscriberNotificationResponse($result->toArray());
    }
}
