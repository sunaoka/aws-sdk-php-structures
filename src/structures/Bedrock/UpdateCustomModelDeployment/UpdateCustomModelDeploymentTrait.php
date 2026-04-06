<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateCustomModelDeployment;

trait UpdateCustomModelDeploymentTrait
{
    /**
     * @param UpdateCustomModelDeploymentRequest $args
     * @return UpdateCustomModelDeploymentResponse
     */
    public function updateCustomModelDeployment(UpdateCustomModelDeploymentRequest $args)
    {
        $result = parent::updateCustomModelDeployment($args->toArray());
        return new UpdateCustomModelDeploymentResponse($result->toArray());
    }
}
