<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\DeleteWorkerFleet;

trait DeleteWorkerFleetTrait
{
    /**
     * @param DeleteWorkerFleetRequest $args
     * @return DeleteWorkerFleetResponse
     */
    public function deleteWorkerFleet(DeleteWorkerFleetRequest $args)
    {
        $result = parent::deleteWorkerFleet($args->toArray());
        return new DeleteWorkerFleetResponse($result->toArray());
    }
}
