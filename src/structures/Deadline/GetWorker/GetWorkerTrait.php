<?php

namespace Sunaoka\Aws\Structures\Deadline\GetWorker;

trait GetWorkerTrait
{
    /**
     * @param GetWorkerRequest $args
     * @return GetWorkerResponse
     */
    public function getWorker(GetWorkerRequest $args)
    {
        $result = parent::getWorker($args->toArray());
        return new GetWorkerResponse($result->toArray());
    }
}
