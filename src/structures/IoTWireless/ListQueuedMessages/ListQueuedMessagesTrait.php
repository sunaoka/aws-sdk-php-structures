<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListQueuedMessages;

trait ListQueuedMessagesTrait
{
    /**
     * @param ListQueuedMessagesRequest $args
     * @return ListQueuedMessagesResponse
     */
    public function listQueuedMessages(ListQueuedMessagesRequest $args)
    {
        $result = parent::listQueuedMessages($args->toArray());
        return new ListQueuedMessagesResponse($result->toArray());
    }
}
