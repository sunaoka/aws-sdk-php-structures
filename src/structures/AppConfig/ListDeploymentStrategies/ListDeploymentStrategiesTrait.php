<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListDeploymentStrategies;

trait ListDeploymentStrategiesTrait
{
    /**
     * @param ListDeploymentStrategiesRequest $args
     * @return ListDeploymentStrategiesResponse
     */
    public function listDeploymentStrategies(ListDeploymentStrategiesRequest $args)
    {
        $result = parent::listDeploymentStrategies($args->toArray());
        return new ListDeploymentStrategiesResponse($result->toArray());
    }
}
