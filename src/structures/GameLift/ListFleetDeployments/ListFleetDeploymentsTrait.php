<?php

namespace Sunaoka\Aws\Structures\GameLift\ListFleetDeployments;

trait ListFleetDeploymentsTrait
{
    /**
     * @param ListFleetDeploymentsRequest $args
     * @return ListFleetDeploymentsResponse
     */
    public function listFleetDeployments(ListFleetDeploymentsRequest $args)
    {
        $result = parent::listFleetDeployments($args->toArray());
        return new ListFleetDeploymentsResponse($result->toArray());
    }
}
