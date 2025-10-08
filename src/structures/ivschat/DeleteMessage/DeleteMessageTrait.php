<?php

namespace Sunaoka\Aws\Structures\ivschat\DeleteMessage;

trait DeleteMessageTrait
{
    /**
     * @param DeleteMessageRequest $args
     * @return DeleteMessageResponse
     */
    public function deleteMessage(DeleteMessageRequest $args)
    {
        $result = parent::deleteMessage($args->toArray());
        return new DeleteMessageResponse($result->toArray());
    }
}
