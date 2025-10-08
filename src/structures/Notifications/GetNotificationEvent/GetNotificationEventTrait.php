<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent;

trait GetNotificationEventTrait
{
    /**
     * @param GetNotificationEventRequest $args
     * @return GetNotificationEventResponse
     */
    public function getNotificationEvent(GetNotificationEventRequest $args)
    {
        $result = parent::getNotificationEvent($args->toArray());
        return new GetNotificationEventResponse($result->toArray());
    }
}
