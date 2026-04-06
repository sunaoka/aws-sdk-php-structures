<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetWorker;

trait BatchGetWorkerTrait
{
    /**
     * @param BatchGetWorkerRequest $args
     * @return BatchGetWorkerResponse
     */
    public function batchGetWorker(BatchGetWorkerRequest $args)
    {
        $result = parent::batchGetWorker($args->toArray());
        return new BatchGetWorkerResponse($result->toArray());
    }
}
