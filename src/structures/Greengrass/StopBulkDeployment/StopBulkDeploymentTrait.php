<?php

namespace Sunaoka\Aws\Structures\Greengrass\StopBulkDeployment;

trait StopBulkDeploymentTrait
{
    /**
     * @param StopBulkDeploymentRequest $args
     * @return StopBulkDeploymentResponse
     */
    public function stopBulkDeployment(StopBulkDeploymentRequest $args)
    {
        $result = parent::stopBulkDeployment($args->toArray());
        return new StopBulkDeploymentResponse($result->toArray());
    }
}
