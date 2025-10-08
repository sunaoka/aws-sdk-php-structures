<?php

namespace Sunaoka\Aws\Structures\IoTWireless\DeleteQueuedMessages;

trait DeleteQueuedMessagesTrait
{
    /**
     * @param DeleteQueuedMessagesRequest $args
     * @return DeleteQueuedMessagesResponse
     */
    public function deleteQueuedMessages(DeleteQueuedMessagesRequest $args)
    {
        $result = parent::deleteQueuedMessages($args->toArray());
        return new DeleteQueuedMessagesResponse($result->toArray());
    }
}
