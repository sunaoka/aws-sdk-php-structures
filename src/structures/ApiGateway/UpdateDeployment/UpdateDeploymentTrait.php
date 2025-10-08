<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateDeployment;

trait UpdateDeploymentTrait
{
    /**
     * @param UpdateDeploymentRequest $args
     * @return UpdateDeploymentResponse
     */
    public function updateDeployment(UpdateDeploymentRequest $args)
    {
        $result = parent::updateDeployment($args->toArray());
        return new UpdateDeploymentResponse($result->toArray());
    }
}
