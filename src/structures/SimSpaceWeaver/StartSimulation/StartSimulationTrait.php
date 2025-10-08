<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\StartSimulation;

trait StartSimulationTrait
{
    /**
     * @param StartSimulationRequest $args
     * @return StartSimulationResponse
     */
    public function startSimulation(StartSimulationRequest $args)
    {
        $result = parent::startSimulation($args->toArray());
        return new StartSimulationResponse($result->toArray());
    }
}
