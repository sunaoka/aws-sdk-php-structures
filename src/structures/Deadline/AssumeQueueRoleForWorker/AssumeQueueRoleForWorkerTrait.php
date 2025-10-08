<?php

namespace Sunaoka\Aws\Structures\Deadline\AssumeQueueRoleForWorker;

trait AssumeQueueRoleForWorkerTrait
{
    /**
     * @param AssumeQueueRoleForWorkerRequest $args
     * @return AssumeQueueRoleForWorkerResponse
     */
    public function assumeQueueRoleForWorker(AssumeQueueRoleForWorkerRequest $args)
    {
        $result = parent::assumeQueueRoleForWorker($args->toArray());
        return new AssumeQueueRoleForWorkerResponse($result->toArray());
    }
}
