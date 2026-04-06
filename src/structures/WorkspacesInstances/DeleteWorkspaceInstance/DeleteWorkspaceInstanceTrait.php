<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\DeleteWorkspaceInstance;

trait DeleteWorkspaceInstanceTrait
{
    /**
     * @param DeleteWorkspaceInstanceRequest $args
     * @return DeleteWorkspaceInstanceResponse
     */
    public function deleteWorkspaceInstance(DeleteWorkspaceInstanceRequest $args)
    {
        $result = parent::deleteWorkspaceInstance($args->toArray());
        return new DeleteWorkspaceInstanceResponse($result->toArray());
    }
}
