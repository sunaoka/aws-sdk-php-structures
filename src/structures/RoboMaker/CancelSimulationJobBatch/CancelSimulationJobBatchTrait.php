<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelSimulationJobBatch;

trait CancelSimulationJobBatchTrait
{
    /**
     * @param CancelSimulationJobBatchRequest $args
     * @return CancelSimulationJobBatchResponse
     */
    public function cancelSimulationJobBatch(CancelSimulationJobBatchRequest $args)
    {
        $result = parent::cancelSimulationJobBatch($args->toArray());
        return new CancelSimulationJobBatchResponse($result->toArray());
    }
}
