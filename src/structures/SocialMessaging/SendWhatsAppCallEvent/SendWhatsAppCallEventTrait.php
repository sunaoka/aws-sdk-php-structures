<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppCallEvent;

trait SendWhatsAppCallEventTrait
{
    /**
     * @param SendWhatsAppCallEventRequest $args
     * @return SendWhatsAppCallEventResponse
     */
    public function sendWhatsAppCallEvent(SendWhatsAppCallEventRequest $args)
    {
        $result = parent::sendWhatsAppCallEvent($args->toArray());
        return new SendWhatsAppCallEventResponse($result->toArray());
    }
}
