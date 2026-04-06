<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\GetWorkerFleet;

trait GetWorkerFleetTrait
{
    /**
     * @param GetWorkerFleetRequest $args
     * @return GetWorkerFleetResponse
     */
    public function getWorkerFleet(GetWorkerFleetRequest $args)
    {
        $result = parent::getWorkerFleet($args->toArray());
        return new GetWorkerFleetResponse($result->toArray());
    }
}
