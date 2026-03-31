<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendNotifyVoiceMessage;

trait SendNotifyVoiceMessageTrait
{
    /**
     * @param SendNotifyVoiceMessageRequest $args
     * @return SendNotifyVoiceMessageResponse
     */
    public function sendNotifyVoiceMessage(SendNotifyVoiceMessageRequest $args)
    {
        $result = parent::sendNotifyVoiceMessage($args->toArray());
        return new SendNotifyVoiceMessageResponse($result->toArray());
    }
}
