<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationEvent;

trait GetManagedNotificationEventTrait
{
    /**
     * @param GetManagedNotificationEventRequest $args
     * @return GetManagedNotificationEventResponse
     */
    public function getManagedNotificationEvent(GetManagedNotificationEventRequest $args)
    {
        $result = parent::getManagedNotificationEvent($args->toArray());
        return new GetManagedNotificationEventResponse($result->toArray());
    }
}
