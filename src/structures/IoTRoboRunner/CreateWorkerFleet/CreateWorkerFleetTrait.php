<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorkerFleet;

trait CreateWorkerFleetTrait
{
    /**
     * @param CreateWorkerFleetRequest $args
     * @return CreateWorkerFleetResponse
     */
    public function createWorkerFleet(CreateWorkerFleetRequest $args)
    {
        $result = parent::createWorkerFleet($args->toArray());
        return new CreateWorkerFleetResponse($result->toArray());
    }
}
