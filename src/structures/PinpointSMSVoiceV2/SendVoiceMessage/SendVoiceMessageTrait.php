<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendVoiceMessage;

trait SendVoiceMessageTrait
{
    /**
     * @param SendVoiceMessageRequest $args
     * @return SendVoiceMessageResponse
     */
    public function sendVoiceMessage(SendVoiceMessageRequest $args)
    {
        $result = parent::sendVoiceMessage($args->toArray());
        return new SendVoiceMessageResponse($result->toArray());
    }
}
