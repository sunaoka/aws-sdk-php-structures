<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChildEvents;

trait ListManagedNotificationChildEventsTrait
{
    /**
     * @param ListManagedNotificationChildEventsRequest $args
     * @return ListManagedNotificationChildEventsResponse
     */
    public function listManagedNotificationChildEvents(ListManagedNotificationChildEventsRequest $args)
    {
        $result = parent::listManagedNotificationChildEvents($args->toArray());
        return new ListManagedNotificationChildEventsResponse($result->toArray());
    }
}
