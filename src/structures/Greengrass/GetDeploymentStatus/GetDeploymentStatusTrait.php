<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetDeploymentStatus;

trait GetDeploymentStatusTrait
{
    /**
     * @param GetDeploymentStatusRequest $args
     * @return GetDeploymentStatusResponse
     */
    public function getDeploymentStatus(GetDeploymentStatusRequest $args)
    {
        $result = parent::getDeploymentStatus($args->toArray());
        return new GetDeploymentStatusResponse($result->toArray());
    }
}
