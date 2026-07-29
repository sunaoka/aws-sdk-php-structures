<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateWorkspace;

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
