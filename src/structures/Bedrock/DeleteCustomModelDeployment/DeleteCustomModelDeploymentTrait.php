<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteCustomModelDeployment;

trait DeleteCustomModelDeploymentTrait
{
    /**
     * @param DeleteCustomModelDeploymentRequest $args
     * @return DeleteCustomModelDeploymentResponse
     */
    public function deleteCustomModelDeployment(DeleteCustomModelDeploymentRequest $args)
    {
        $result = parent::deleteCustomModelDeployment($args->toArray());
        return new DeleteCustomModelDeploymentResponse($result->toArray());
    }
}
