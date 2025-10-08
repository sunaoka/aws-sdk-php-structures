<?php

namespace Sunaoka\Aws\Structures\SimSpaceWeaver\ListSimulations;

trait ListSimulationsTrait
{
    /**
     * @param ListSimulationsRequest $args
     * @return ListSimulationsResponse
     */
    public function listSimulations(ListSimulationsRequest $args)
    {
        $result = parent::listSimulations($args->toArray());
        return new ListSimulationsResponse($result->toArray());
    }
}
