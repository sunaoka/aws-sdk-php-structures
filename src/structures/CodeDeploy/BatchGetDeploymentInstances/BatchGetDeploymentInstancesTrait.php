<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentInstances;

trait BatchGetDeploymentInstancesTrait
{
    /**
     * @param BatchGetDeploymentInstancesRequest $args
     * @return BatchGetDeploymentInstancesResponse
     */
    public function batchGetDeploymentInstances(BatchGetDeploymentInstancesRequest $args)
    {
        $result = parent::batchGetDeploymentInstances($args->toArray());
        return new BatchGetDeploymentInstancesResponse($result->toArray());
    }
}
