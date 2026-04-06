<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationChildEvent;

trait GetManagedNotificationChildEventTrait
{
    /**
     * @param GetManagedNotificationChildEventRequest $args
     * @return GetManagedNotificationChildEventResponse
     */
    public function getManagedNotificationChildEvent(GetManagedNotificationChildEventRequest $args)
    {
        $result = parent::getManagedNotificationChildEvent($args->toArray());
        return new GetManagedNotificationChildEventResponse($result->toArray());
    }
}
