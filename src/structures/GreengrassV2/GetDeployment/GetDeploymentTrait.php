<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment;

trait GetDeploymentTrait
{
    /**
     * @param GetDeploymentRequest $args
     * @return GetDeploymentResponse
     */
    public function getDeployment(GetDeploymentRequest $args)
    {
        $result = parent::getDeployment($args->toArray());
        return new GetDeploymentResponse($result->toArray());
    }
}
