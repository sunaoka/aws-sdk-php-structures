<?php

namespace Sunaoka\Aws\Structures\Rds\CreateBlueGreenDeployment;

trait CreateBlueGreenDeploymentTrait
{
    /**
     * @param CreateBlueGreenDeploymentRequest $args
     * @return CreateBlueGreenDeploymentResponse
     */
    public function createBlueGreenDeployment(CreateBlueGreenDeploymentRequest $args)
    {
        $result = parent::createBlueGreenDeployment($args->toArray());
        return new CreateBlueGreenDeploymentResponse($result->toArray());
    }
}
