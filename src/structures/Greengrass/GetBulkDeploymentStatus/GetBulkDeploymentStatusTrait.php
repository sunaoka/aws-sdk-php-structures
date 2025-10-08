<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus;

trait GetBulkDeploymentStatusTrait
{
    /**
     * @param GetBulkDeploymentStatusRequest $args
     * @return GetBulkDeploymentStatusResponse
     */
    public function getBulkDeploymentStatus(GetBulkDeploymentStatusRequest $args)
    {
        $result = parent::getBulkDeploymentStatus($args->toArray());
        return new GetBulkDeploymentStatusResponse($result->toArray());
    }
}
