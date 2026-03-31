<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListPendingMessages;

trait ListPendingMessagesTrait
{
    /**
     * @param ListPendingMessagesRequest $args
     * @return ListPendingMessagesResponse
     */
    public function listPendingMessages(ListPendingMessagesRequest $args)
    {
        $result = parent::listPendingMessages($args->toArray());
        return new ListPendingMessagesResponse($result->toArray());
    }
}
