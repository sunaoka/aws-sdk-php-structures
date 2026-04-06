<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance;

trait CreateWorkspaceInstanceTrait
{
    /**
     * @param CreateWorkspaceInstanceRequest $args
     * @return CreateWorkspaceInstanceResponse
     */
    public function createWorkspaceInstance(CreateWorkspaceInstanceRequest $args)
    {
        $result = parent::createWorkspaceInstance($args->toArray());
        return new CreateWorkspaceInstanceResponse($result->toArray());
    }
}
