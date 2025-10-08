<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob;

trait CreateSimulationJobTrait
{
    /**
     * @param CreateSimulationJobRequest $args
     * @return CreateSimulationJobResponse
     */
    public function createSimulationJob(CreateSimulationJobRequest $args)
    {
        $result = parent::createSimulationJob($args->toArray());
        return new CreateSimulationJobResponse($result->toArray());
    }
}
