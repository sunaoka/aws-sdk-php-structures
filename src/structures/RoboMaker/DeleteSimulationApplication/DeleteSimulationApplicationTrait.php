<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteSimulationApplication;

trait DeleteSimulationApplicationTrait
{
    /**
     * @param DeleteSimulationApplicationRequest $args
     * @return DeleteSimulationApplicationResponse
     */
    public function deleteSimulationApplication(DeleteSimulationApplicationRequest $args)
    {
        $result = parent::deleteSimulationApplication($args->toArray());
        return new DeleteSimulationApplicationResponse($result->toArray());
    }
}
