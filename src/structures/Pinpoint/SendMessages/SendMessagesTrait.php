<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages;

trait SendMessagesTrait
{
    /**
     * @param SendMessagesRequest $args
     * @return SendMessagesResponse
     */
    public function sendMessages(SendMessagesRequest $args)
    {
        $result = parent::sendMessages($args->toArray());
        return new SendMessagesResponse($result->toArray());
    }
}
