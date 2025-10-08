<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StopSimulation;

trait StopSimulationTrait
{
    /**
     * @param StopSimulationRequest $args
     * @return StopSimulationResponse
     */
    public function stopSimulation(StopSimulationRequest $args)
    {
        $result = parent::stopSimulation($args->toArray());
        return new StopSimulationResponse($result->toArray());
    }
}
