<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendTextMessage;

trait SendTextMessageTrait
{
    /**
     * @param SendTextMessageRequest $args
     * @return SendTextMessageResponse
     */
    public function sendTextMessage(SendTextMessageRequest $args)
    {
        $result = parent::sendTextMessage($args->toArray());
        return new SendTextMessageResponse($result->toArray());
    }
}
