<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents;

trait ListNotificationEventsTrait
{
    /**
     * @param ListNotificationEventsRequest $args
     * @return ListNotificationEventsResponse
     */
    public function listNotificationEvents(ListNotificationEventsRequest $args)
    {
        $result = parent::listNotificationEvents($args->toArray());
        return new ListNotificationEventsResponse($result->toArray());
    }
}
