<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateQueue;

trait CreateQueueTrait
{
    /**
     * @param CreateQueueRequest $args
     * @return CreateQueueResponse
     */
    public function createQueue(CreateQueueRequest $args)
    {
        $result = parent::createQueue($args->toArray());
        return new CreateQueueResponse($result->toArray());
    }
}
