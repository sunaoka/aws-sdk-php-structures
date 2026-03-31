<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendNotifyTextMessage;

trait SendNotifyTextMessageTrait
{
    /**
     * @param SendNotifyTextMessageRequest $args
     * @return SendNotifyTextMessageResponse
     */
    public function sendNotifyTextMessage(SendNotifyTextMessageRequest $args)
    {
        $result = parent::sendNotifyTextMessage($args->toArray());
        return new SendNotifyTextMessageResponse($result->toArray());
    }
}
