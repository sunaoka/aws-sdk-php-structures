<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateJobQueue;

trait UpdateJobQueueTrait
{
    /**
     * @param UpdateJobQueueRequest $args
     * @return UpdateJobQueueResponse
     */
    public function updateJobQueue(UpdateJobQueueRequest $args)
    {
        $result = parent::updateJobQueue($args->toArray());
        return new UpdateJobQueueResponse($result->toArray());
    }
}
