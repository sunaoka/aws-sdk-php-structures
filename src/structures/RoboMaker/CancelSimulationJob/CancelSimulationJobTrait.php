<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelSimulationJob;

trait CancelSimulationJobTrait
{
    /**
     * @param CancelSimulationJobRequest $args
     * @return CancelSimulationJobResponse
     */
    public function cancelSimulationJob(CancelSimulationJobRequest $args)
    {
        $result = parent::cancelSimulationJob($args->toArray());
        return new CancelSimulationJobResponse($result->toArray());
    }
}
