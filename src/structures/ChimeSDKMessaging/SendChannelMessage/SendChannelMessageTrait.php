<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage;

trait SendChannelMessageTrait
{
    /**
     * @param SendChannelMessageRequest $args
     * @return SendChannelMessageResponse
     */
    public function sendChannelMessage(SendChannelMessageRequest $args)
    {
        $result = parent::sendChannelMessage($args->toArray());
        return new SendChannelMessageResponse($result->toArray());
    }
}
