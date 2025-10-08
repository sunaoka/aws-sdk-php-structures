<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessageBatch;

trait DeleteMessageBatchTrait
{
    /**
     * @param DeleteMessageBatchRequest $args
     * @return DeleteMessageBatchResponse
     */
    public function deleteMessageBatch(DeleteMessageBatchRequest $args)
    {
        $result = parent::deleteMessageBatch($args->toArray());
        return new DeleteMessageBatchResponse($result->toArray());
    }
}
