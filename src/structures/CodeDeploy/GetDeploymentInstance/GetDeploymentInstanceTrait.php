<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentInstance;

trait GetDeploymentInstanceTrait
{
    /**
     * @param GetDeploymentInstanceRequest $args
     * @return GetDeploymentInstanceResponse
     */
    public function getDeploymentInstance(GetDeploymentInstanceRequest $args)
    {
        $result = parent::getDeploymentInstance($args->toArray());
        return new GetDeploymentInstanceResponse($result->toArray());
    }
}
