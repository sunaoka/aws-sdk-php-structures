<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppConversionEvent;

trait SendWhatsAppConversionEventTrait
{
    /**
     * @param SendWhatsAppConversionEventRequest $args
     * @return SendWhatsAppConversionEventResponse
     */
    public function sendWhatsAppConversionEvent(SendWhatsAppConversionEventRequest $args)
    {
        $result = parent::sendWhatsAppConversionEvent($args->toArray());
        return new SendWhatsAppConversionEventResponse($result->toArray());
    }
}
