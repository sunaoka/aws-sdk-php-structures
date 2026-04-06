<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStageDeployments;

trait ListStageDeploymentsTrait
{
    /**
     * @param ListStageDeploymentsRequest $args
     * @return ListStageDeploymentsResponse
     */
    public function listStageDeployments(ListStageDeploymentsRequest $args)
    {
        $result = parent::listStageDeployments($args->toArray());
        return new ListStageDeploymentsResponse($result->toArray());
    }
}
