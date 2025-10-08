<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\CreateWorkspace;

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
