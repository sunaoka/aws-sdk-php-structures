<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\DeleteSimulation;

trait DeleteSimulationTrait
{
    /**
     * @param DeleteSimulationRequest $args
     * @return DeleteSimulationResponse
     */
    public function deleteSimulation(DeleteSimulationRequest $args)
    {
        $result = parent::deleteSimulation($args->toArray());
        return new DeleteSimulationResponse($result->toArray());
    }
}
