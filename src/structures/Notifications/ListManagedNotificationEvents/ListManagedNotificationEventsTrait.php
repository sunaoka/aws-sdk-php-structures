<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationEvents;

trait ListManagedNotificationEventsTrait
{
    /**
     * @param ListManagedNotificationEventsRequest $args
     * @return ListManagedNotificationEventsResponse
     */
    public function listManagedNotificationEvents(ListManagedNotificationEventsRequest $args)
    {
        $result = parent::listManagedNotificationEvents($args->toArray());
        return new ListManagedNotificationEventsResponse($result->toArray());
    }
}
