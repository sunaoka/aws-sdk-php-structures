<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SendRcsMessage;

trait SendRcsMessageTrait
{
    /**
     * @param SendRcsMessageRequest $args
     * @return SendRcsMessageResponse
     */
    public function sendRcsMessage(SendRcsMessageRequest $args)
    {
        $result = parent::sendRcsMessage($args->toArray());
        return new SendRcsMessageResponse($result->toArray());
    }
}
