<?php

namespace Sunaoka\Aws\Structures\Greengrass\StartBulkDeployment;

trait StartBulkDeploymentTrait
{
    /**
     * @param StartBulkDeploymentRequest $args
     * @return StartBulkDeploymentResponse
     */
    public function startBulkDeployment(StartBulkDeploymentRequest $args)
    {
        $result = parent::startBulkDeployment($args->toArray());
        return new StartBulkDeploymentResponse($result->toArray());
    }
}
