<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateWorker;

trait CreateWorkerTrait
{
    /**
     * @param CreateWorkerRequest $args
     * @return CreateWorkerResponse
     */
    public function createWorker(CreateWorkerRequest $args)
    {
        $result = parent::createWorker($args->toArray());
        return new CreateWorkerResponse($result->toArray());
    }
}
