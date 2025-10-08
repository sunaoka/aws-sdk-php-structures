<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteWorkspace;

trait DeleteWorkspaceTrait
{
    /**
     * @param DeleteWorkspaceRequest $args
     * @return DeleteWorkspaceResponse
     */
    public function deleteWorkspace(DeleteWorkspaceRequest $args)
    {
        $result = parent::deleteWorkspace($args->toArray());
        return new DeleteWorkspaceResponse($result->toArray());
    }
}
