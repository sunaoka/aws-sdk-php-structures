<?php

namespace Sunaoka\Aws\Structures\Sqs\ReceiveMessage;

trait ReceiveMessageTrait
{
    /**
     * @param ReceiveMessageRequest $args
     * @return ReceiveMessageResponse
     */
    public function receiveMessage(ReceiveMessageRequest $args)
    {
        $result = parent::receiveMessage($args->toArray());
        return new ReceiveMessageResponse($result->toArray());
    }
}
