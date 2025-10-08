<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages;

trait SendUsersMessagesTrait
{
    /**
     * @param SendUsersMessagesRequest $args
     * @return SendUsersMessagesResponse
     */
    public function sendUsersMessages(SendUsersMessagesRequest $args)
    {
        $result = parent::sendUsersMessages($args->toArray());
        return new SendUsersMessagesResponse($result->toArray());
    }
}
