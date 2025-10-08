<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendMediaMessage;

trait SendMediaMessageTrait
{
    /**
     * @param SendMediaMessageRequest $args
     * @return SendMediaMessageResponse
     */
    public function sendMediaMessage(SendMediaMessageRequest $args)
    {
        $result = parent::sendMediaMessage($args->toArray());
        return new SendMediaMessageResponse($result->toArray());
    }
}
