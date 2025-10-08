<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteQueue;

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
