<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage;

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
