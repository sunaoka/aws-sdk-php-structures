<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification;

trait SendOutboundWebNotificationTrait
{
    /**
     * @param SendOutboundWebNotificationRequest $args
     * @return SendOutboundWebNotificationResponse
     */
    public function sendOutboundWebNotification(SendOutboundWebNotificationRequest $args)
    {
        $result = parent::sendOutboundWebNotification($args->toArray());
        return new SendOutboundWebNotificationResponse($result->toArray());
    }
}
