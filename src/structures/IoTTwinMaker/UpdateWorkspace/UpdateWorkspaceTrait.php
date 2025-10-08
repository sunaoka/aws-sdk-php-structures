<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateWorkspace;

trait UpdateWorkspaceTrait
{
    /**
     * @param UpdateWorkspaceRequest $args
     * @return UpdateWorkspaceResponse
     */
    public function updateWorkspace(UpdateWorkspaceRequest $args)
    {
        $result = parent::updateWorkspace($args->toArray());
        return new UpdateWorkspaceResponse($result->toArray());
    }
}
