<?php

namespace Sunaoka\Aws\Structures\MTurk\SendTestEventNotification;

trait SendTestEventNotificationTrait
{
    /**
     * @param SendTestEventNotificationRequest $args
     * @return SendTestEventNotificationResponse
     */
    public function sendTestEventNotification(SendTestEventNotificationRequest $args)
    {
        $result = parent::sendTestEventNotification($args->toArray());
        return new SendTestEventNotificationResponse($result->toArray());
    }
}
