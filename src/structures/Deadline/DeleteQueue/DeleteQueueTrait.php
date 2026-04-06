<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteQueue;

trait DeleteQueueTrait
{
    /**
     * @param DeleteQueueRequest $args
     * @return DeleteQueueResponse
     */
    public function deleteQueue(DeleteQueueRequest $args)
    {
        $result = parent::deleteQueue($args->toArray());
        return new DeleteQueueResponse($result->toArray());
    }
}
