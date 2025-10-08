<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetDeploymentGroups;

trait BatchGetDeploymentGroupsTrait
{
    /**
     * @param BatchGetDeploymentGroupsRequest $args
     * @return BatchGetDeploymentGroupsResponse
     */
    public function batchGetDeploymentGroups(BatchGetDeploymentGroupsRequest $args)
    {
        $result = parent::batchGetDeploymentGroups($args->toArray());
        return new BatchGetDeploymentGroupsResponse($result->toArray());
    }
}
