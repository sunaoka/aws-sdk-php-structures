<?php

namespace Sunaoka\Aws\Structures\RoboMaker\StartSimulationJobBatch;

trait StartSimulationJobBatchTrait
{
    /**
     * @param StartSimulationJobBatchRequest $args
     * @return StartSimulationJobBatchResponse
     */
    public function startSimulationJobBatch(StartSimulationJobBatchRequest $args)
    {
        $result = parent::startSimulationJobBatch($args->toArray());
        return new StartSimulationJobBatchResponse($result->toArray());
    }
}
