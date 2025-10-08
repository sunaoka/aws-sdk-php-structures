<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListRetainedMessages;

trait ListRetainedMessagesTrait
{
    /**
     * @param ListRetainedMessagesRequest $args
     * @return ListRetainedMessagesResponse
     */
    public function listRetainedMessages(ListRetainedMessagesRequest $args)
    {
        $result = parent::listRetainedMessages($args->toArray());
        return new ListRetainedMessagesResponse($result->toArray());
    }
}
