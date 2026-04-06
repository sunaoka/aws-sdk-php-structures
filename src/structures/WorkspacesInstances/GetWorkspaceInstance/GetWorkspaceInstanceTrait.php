<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\GetWorkspaceInstance;

trait GetWorkspaceInstanceTrait
{
    /**
     * @param GetWorkspaceInstanceRequest $args
     * @return GetWorkspaceInstanceResponse
     */
    public function getWorkspaceInstance(GetWorkspaceInstanceRequest $args)
    {
        $result = parent::getWorkspaceInstance($args->toArray());
        return new GetWorkspaceInstanceResponse($result->toArray());
    }
}
