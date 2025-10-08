<?php

namespace Sunaoka\Aws\Structures\RoboMaker\RestartSimulationJob;

trait RestartSimulationJobTrait
{
    /**
     * @param RestartSimulationJobRequest $args
     * @return RestartSimulationJobResponse
     */
    public function restartSimulationJob(RestartSimulationJobRequest $args)
    {
        $result = parent::restartSimulationJob($args->toArray());
        return new RestartSimulationJobResponse($result->toArray());
    }
}
