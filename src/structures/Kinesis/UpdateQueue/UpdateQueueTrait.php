<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueue;

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
