<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentTarget;

trait GetDeploymentTargetTrait
{
    /**
     * @param GetDeploymentTargetRequest $args
     * @return GetDeploymentTargetResponse
     */
    public function getDeploymentTarget(GetDeploymentTargetRequest $args)
    {
        $result = parent::getDeploymentTarget($args->toArray());
        return new GetDeploymentTargetResponse($result->toArray());
    }
}
