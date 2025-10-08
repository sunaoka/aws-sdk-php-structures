<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

trait UpdateDeploymentStrategyTrait
{
    /**
     * @param UpdateDeploymentStrategyRequest $args
     * @return UpdateDeploymentStrategyResponse
     */
    public function updateDeploymentStrategy(UpdateDeploymentStrategyRequest $args)
    {
        $result = parent::updateDeploymentStrategy($args->toArray());
        return new UpdateDeploymentStrategyResponse($result->toArray());
    }
}
