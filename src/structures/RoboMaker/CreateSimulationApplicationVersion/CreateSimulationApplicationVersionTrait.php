<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplicationVersion;

trait CreateSimulationApplicationVersionTrait
{
    /**
     * @param CreateSimulationApplicationVersionRequest $args
     * @return CreateSimulationApplicationVersionResponse
     */
    public function createSimulationApplicationVersion(CreateSimulationApplicationVersionRequest $args)
    {
        $result = parent::createSimulationApplicationVersion($args->toArray());
        return new CreateSimulationApplicationVersionResponse($result->toArray());
    }
}
