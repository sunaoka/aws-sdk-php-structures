<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorker;

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
