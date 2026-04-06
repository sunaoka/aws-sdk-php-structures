<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication;

trait CreateSimulationApplicationTrait
{
    /**
     * @param CreateSimulationApplicationRequest $args
     * @return CreateSimulationApplicationResponse
     */
    public function createSimulationApplication(CreateSimulationApplicationRequest $args)
    {
        $result = parent::createSimulationApplication($args->toArray());
        return new CreateSimulationApplicationResponse($result->toArray());
    }
}
