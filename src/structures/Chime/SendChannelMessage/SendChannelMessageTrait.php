<?php

namespace Sunaoka\Aws\Structures\Chime\SendChannelMessage;

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
