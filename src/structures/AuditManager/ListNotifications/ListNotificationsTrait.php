<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListNotifications;

trait ListNotificationsTrait
{
    /**
     * @param ListNotificationsRequest $args
     * @return ListNotificationsResponse
     */
    public function listNotifications(ListNotificationsRequest $args)
    {
        $result = parent::listNotifications($args->toArray());
        return new ListNotificationsResponse($result->toArray());
    }
}
