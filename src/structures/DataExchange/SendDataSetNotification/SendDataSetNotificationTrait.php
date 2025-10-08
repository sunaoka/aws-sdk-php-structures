<?php

namespace Sunaoka\Aws\Structures\DataExchange\SendDataSetNotification;

trait SendDataSetNotificationTrait
{
    /**
     * @param SendDataSetNotificationRequest $args
     * @return SendDataSetNotificationResponse
     */
    public function sendDataSetNotification(SendDataSetNotificationRequest $args)
    {
        $result = parent::sendDataSetNotification($args->toArray());
        return new SendDataSetNotificationResponse($result->toArray());
    }
}
