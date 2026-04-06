<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModelDeployment;

trait GetCustomModelDeploymentTrait
{
    /**
     * @param GetCustomModelDeploymentRequest $args
     * @return GetCustomModelDeploymentResponse
     */
    public function getCustomModelDeployment(GetCustomModelDeploymentRequest $args)
    {
        $result = parent::getCustomModelDeployment($args->toArray());
        return new GetCustomModelDeploymentResponse($result->toArray());
    }
}
