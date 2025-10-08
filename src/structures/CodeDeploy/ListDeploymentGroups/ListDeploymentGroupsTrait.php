<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeploymentGroups;

trait ListDeploymentGroupsTrait
{
    /**
     * @param ListDeploymentGroupsRequest $args
     * @return ListDeploymentGroupsResponse
     */
    public function listDeploymentGroups(ListDeploymentGroupsRequest $args)
    {
        $result = parent::listDeploymentGroups($args->toArray());
        return new ListDeploymentGroupsResponse($result->toArray());
    }
}
