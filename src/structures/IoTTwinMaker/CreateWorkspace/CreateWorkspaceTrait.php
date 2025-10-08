<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateWorkspace;

trait CreateWorkspaceTrait
{
    /**
     * @param CreateWorkspaceRequest $args
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace(CreateWorkspaceRequest $args)
    {
        $result = parent::createWorkspace($args->toArray());
        return new CreateWorkspaceResponse($result->toArray());
    }
}
