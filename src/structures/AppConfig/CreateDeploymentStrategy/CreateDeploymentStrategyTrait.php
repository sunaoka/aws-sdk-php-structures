<?php

namespace Sunaoka\Aws\Structures\AppConfig\CreateDeploymentStrategy;

trait CreateDeploymentStrategyTrait
{
    /**
     * @param CreateDeploymentStrategyRequest $args
     * @return CreateDeploymentStrategyResponse
     */
    public function createDeploymentStrategy(CreateDeploymentStrategyRequest $args)
    {
        $result = parent::createDeploymentStrategy($args->toArray());
        return new CreateDeploymentStrategyResponse($result->toArray());
    }
}
