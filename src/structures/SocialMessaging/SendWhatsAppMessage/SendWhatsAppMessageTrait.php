<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\SendWhatsAppMessage;

trait SendWhatsAppMessageTrait
{
    /**
     * @param SendWhatsAppMessageRequest $args
     * @return SendWhatsAppMessageResponse
     */
    public function sendWhatsAppMessage(SendWhatsAppMessageRequest $args)
    {
        $result = parent::sendWhatsAppMessage($args->toArray());
        return new SendWhatsAppMessageResponse($result->toArray());
    }
}
