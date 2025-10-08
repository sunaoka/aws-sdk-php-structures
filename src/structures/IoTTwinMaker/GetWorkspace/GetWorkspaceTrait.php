<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetWorkspace;

trait GetWorkspaceTrait
{
    /**
     * @param GetWorkspaceRequest $args
     * @return GetWorkspaceResponse
     */
    public function getWorkspace(GetWorkspaceRequest $args)
    {
        $result = parent::getWorkspace($args->toArray());
        return new GetWorkspaceResponse($result->toArray());
    }
}
