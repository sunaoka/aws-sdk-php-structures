<?php

namespace Sunaoka\Aws\Structures\AppConfig\DeleteDeploymentStrategy;

trait DeleteDeploymentStrategyTrait
{
    /**
     * @param DeleteDeploymentStrategyRequest $args
     * @return void
     */
    public function deleteDeploymentStrategy(DeleteDeploymentStrategyRequest $args)
    {
        parent::deleteDeploymentStrategy($args->toArray());
    }
}
