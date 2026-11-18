<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteQueue;

trait DeleteQueueTrait
{
    /**
     * @param DeleteQueueRequest $args
     * @return void
     */
    public function deleteQueue(DeleteQueueRequest $args)
    {
        parent::deleteQueue($args->toArray());
    }
}
