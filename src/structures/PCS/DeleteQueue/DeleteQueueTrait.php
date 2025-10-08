<?php

namespace Sunaoka\Aws\Structures\PCS\DeleteQueue;

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
