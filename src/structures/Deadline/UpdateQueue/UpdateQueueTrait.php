<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateQueue;

trait UpdateQueueTrait
{
    /**
     * @param UpdateQueueRequest $args
     * @return UpdateQueueResponse
     */
    public function updateQueue(UpdateQueueRequest $args)
    {
        $result = parent::updateQueue($args->toArray());
        return new UpdateQueueResponse($result->toArray());
    }
}
