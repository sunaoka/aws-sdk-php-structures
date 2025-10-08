<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteWorker;

trait DeleteWorkerTrait
{
    /**
     * @param DeleteWorkerRequest $args
     * @return DeleteWorkerResponse
     */
    public function deleteWorker(DeleteWorkerRequest $args)
    {
        $result = parent::deleteWorker($args->toArray());
        return new DeleteWorkerResponse($result->toArray());
    }
}
