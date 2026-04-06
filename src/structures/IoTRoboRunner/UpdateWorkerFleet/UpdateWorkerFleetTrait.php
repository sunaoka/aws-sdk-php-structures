<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\UpdateWorkerFleet;

trait UpdateWorkerFleetTrait
{
    /**
     * @param UpdateWorkerFleetRequest $args
     * @return UpdateWorkerFleetResponse
     */
    public function updateWorkerFleet(UpdateWorkerFleetRequest $args)
    {
        $result = parent::updateWorkerFleet($args->toArray());
        return new UpdateWorkerFleetResponse($result->toArray());
    }
}
