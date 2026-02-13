<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserNotificationStatus;

trait UpdateUserNotificationStatusTrait
{
    /**
     * @param UpdateUserNotificationStatusRequest $args
     * @return UpdateUserNotificationStatusResponse
     */
    public function updateUserNotificationStatus(UpdateUserNotificationStatusRequest $args)
    {
        $result = parent::updateUserNotificationStatus($args->toArray());
        return new UpdateUserNotificationStatusResponse($result->toArray());
    }
}
