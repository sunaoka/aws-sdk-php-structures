<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationHubs;

trait ListNotificationHubsTrait
{
    /**
     * @param ListNotificationHubsRequest $args
     * @return ListNotificationHubsResponse
     */
    public function listNotificationHubs(ListNotificationHubsRequest $args)
    {
        $result = parent::listNotificationHubs($args->toArray());
        return new ListNotificationHubsResponse($result->toArray());
    }
}
