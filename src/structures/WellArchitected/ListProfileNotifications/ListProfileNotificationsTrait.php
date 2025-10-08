<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileNotifications;

trait ListProfileNotificationsTrait
{
    /**
     * @param ListProfileNotificationsRequest $args
     * @return ListProfileNotificationsResponse
     */
    public function listProfileNotifications(ListProfileNotificationsRequest $args)
    {
        $result = parent::listProfileNotifications($args->toArray());
        return new ListProfileNotificationsResponse($result->toArray());
    }
}
