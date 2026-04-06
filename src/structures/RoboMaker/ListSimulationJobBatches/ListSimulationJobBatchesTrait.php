<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationJobBatches;

trait ListSimulationJobBatchesTrait
{
    /**
     * @param ListSimulationJobBatchesRequest $args
     * @return ListSimulationJobBatchesResponse
     */
    public function listSimulationJobBatches(ListSimulationJobBatchesRequest $args)
    {
        $result = parent::listSimulationJobBatches($args->toArray());
        return new ListSimulationJobBatchesResponse($result->toArray());
    }
}
