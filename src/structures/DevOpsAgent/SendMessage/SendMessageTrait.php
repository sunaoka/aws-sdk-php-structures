<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage;

trait SendMessageTrait
{
    /**
     * @param SendMessageRequest $args
     * @return SendMessageResponse
     */
    public function sendMessage(SendMessageRequest $args)
    {
        $result = parent::sendMessage($args->toArray());
        return new SendMessageResponse($result->toArray());
    }
}
