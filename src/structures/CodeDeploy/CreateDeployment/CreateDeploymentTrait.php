<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeployment;

trait CreateDeploymentTrait
{
    /**
     * @param CreateDeploymentRequest $args
     * @return CreateDeploymentResponse
     */
    public function createDeployment(CreateDeploymentRequest $args)
    {
        $result = parent::createDeployment($args->toArray());
        return new CreateDeploymentResponse($result->toArray());
    }
}
