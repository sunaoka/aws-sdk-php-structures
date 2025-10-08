<?php

namespace Sunaoka\Aws\Structures\Batch\CreateJobQueue;

trait CreateJobQueueTrait
{
    /**
     * @param CreateJobQueueRequest $args
     * @return CreateJobQueueResponse
     */
    public function createJobQueue(CreateJobQueueRequest $args)
    {
        $result = parent::createJobQueue($args->toArray());
        return new CreateJobQueueResponse($result->toArray());
    }
}
