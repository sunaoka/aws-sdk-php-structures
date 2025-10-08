<?php

namespace Sunaoka\Aws\Structures\QConnect\SendMessage;

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
