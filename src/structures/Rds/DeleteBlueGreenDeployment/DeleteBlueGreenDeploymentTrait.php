<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteBlueGreenDeployment;

trait DeleteBlueGreenDeploymentTrait
{
    /**
     * @param DeleteBlueGreenDeploymentRequest $args
     * @return DeleteBlueGreenDeploymentResponse
     */
    public function deleteBlueGreenDeployment(DeleteBlueGreenDeploymentRequest $args)
    {
        $result = parent::deleteBlueGreenDeployment($args->toArray());
        return new DeleteBlueGreenDeploymentResponse($result->toArray());
    }
}
