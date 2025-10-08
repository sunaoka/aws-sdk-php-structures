<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentInstances;

trait ListDeploymentInstancesTrait
{
    /**
     * @param ListDeploymentInstancesRequest $args
     * @return ListDeploymentInstancesResponse
     */
    public function listDeploymentInstances(ListDeploymentInstancesRequest $args)
    {
        $result = parent::listDeploymentInstances($args->toArray());
        return new ListDeploymentInstancesResponse($result->toArray());
    }
}
