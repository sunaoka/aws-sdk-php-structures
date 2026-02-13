<?php

namespace Sunaoka\Aws\Structures\Connect\ListUserNotifications;

trait ListUserNotificationsTrait
{
    /**
     * @param ListUserNotificationsRequest $args
     * @return ListUserNotificationsResponse
     */
    public function listUserNotifications(ListUserNotificationsRequest $args)
    {
        $result = parent::listUserNotifications($args->toArray());
        return new ListUserNotificationsResponse($result->toArray());
    }
}
