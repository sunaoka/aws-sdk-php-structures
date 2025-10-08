<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\DeleteDeployment;

trait DeleteDeploymentTrait
{
    /**
     * @param DeleteDeploymentRequest $args
     * @return DeleteDeploymentResponse
     */
    public function deleteDeployment(DeleteDeploymentRequest $args)
    {
        $result = parent::deleteDeployment($args->toArray());
        return new DeleteDeploymentResponse($result->toArray());
    }
}
