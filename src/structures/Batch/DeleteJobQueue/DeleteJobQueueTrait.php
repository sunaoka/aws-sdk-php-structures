<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteJobQueue;

trait DeleteJobQueueTrait
{
    /**
     * @param DeleteJobQueueRequest $args
     * @return DeleteJobQueueResponse
     */
    public function deleteJobQueue(DeleteJobQueueRequest $args)
    {
        $result = parent::deleteJobQueue($args->toArray());
        return new DeleteJobQueueResponse($result->toArray());
    }
}
