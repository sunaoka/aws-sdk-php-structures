<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateWorker;

trait UpdateWorkerTrait
{
    /**
     * @param UpdateWorkerRequest $args
     * @return UpdateWorkerResponse
     */
    public function updateWorker(UpdateWorkerRequest $args)
    {
        $result = parent::updateWorker($args->toArray());
        return new UpdateWorkerResponse($result->toArray());
    }
}
