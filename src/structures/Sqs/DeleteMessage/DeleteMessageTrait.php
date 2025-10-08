<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessage;

trait DeleteMessageTrait
{
    /**
     * @param DeleteMessageRequest $args
     * @return void
     */
    public function deleteMessage(DeleteMessageRequest $args)
    {
        parent::deleteMessage($args->toArray());
    }
}
