<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListWorkspaceInstances;

trait ListWorkspaceInstancesTrait
{
    /**
     * @param ListWorkspaceInstancesRequest $args
     * @return ListWorkspaceInstancesResponse
     */
    public function listWorkspaceInstances(ListWorkspaceInstancesRequest $args)
    {
        $result = parent::listWorkspaceInstances($args->toArray());
        return new ListWorkspaceInstancesResponse($result->toArray());
    }
}
