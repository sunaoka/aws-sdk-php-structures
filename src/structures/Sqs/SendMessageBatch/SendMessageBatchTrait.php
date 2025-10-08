<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch;

trait SendMessageBatchTrait
{
    /**
     * @param SendMessageBatchRequest $args
     * @return SendMessageBatchResponse
     */
    public function sendMessageBatch(SendMessageBatchRequest $args)
    {
        $result = parent::sendMessageBatch($args->toArray());
        return new SendMessageBatchResponse($result->toArray());
    }
}
