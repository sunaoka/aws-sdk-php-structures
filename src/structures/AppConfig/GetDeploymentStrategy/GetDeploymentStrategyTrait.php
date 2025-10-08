<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeploymentStrategy;

trait GetDeploymentStrategyTrait
{
    /**
     * @param GetDeploymentStrategyRequest $args
     * @return GetDeploymentStrategyResponse
     */
    public function getDeploymentStrategy(GetDeploymentStrategyRequest $args)
    {
        $result = parent::getDeploymentStrategy($args->toArray());
        return new GetDeploymentStrategyResponse($result->toArray());
    }
}
