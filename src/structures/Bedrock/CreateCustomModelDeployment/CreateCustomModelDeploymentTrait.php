<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateCustomModelDeployment;

trait CreateCustomModelDeploymentTrait
{
    /**
     * @param CreateCustomModelDeploymentRequest $args
     * @return CreateCustomModelDeploymentResponse
     */
    public function createCustomModelDeployment(CreateCustomModelDeploymentRequest $args)
    {
        $result = parent::createCustomModelDeployment($args->toArray());
        return new CreateCustomModelDeploymentResponse($result->toArray());
    }
}
