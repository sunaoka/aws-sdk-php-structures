<?php

namespace Sunaoka\Aws\Structures\Budgets\UpdateNotification;

trait UpdateNotificationTrait
{
    /**
     * @param UpdateNotificationRequest $args
     * @return UpdateNotificationResponse
     */
    public function updateNotification(UpdateNotificationRequest $args)
    {
        $result = parent::updateNotification($args->toArray());
        return new UpdateNotificationResponse($result->toArray());
    }
}
