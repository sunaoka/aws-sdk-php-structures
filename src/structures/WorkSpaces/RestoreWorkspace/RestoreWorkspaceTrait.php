<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RestoreWorkspace;

trait RestoreWorkspaceTrait
{
    /**
     * @param RestoreWorkspaceRequest $args
     * @return RestoreWorkspaceResponse
     */
    public function restoreWorkspace(RestoreWorkspaceRequest $args)
    {
        $result = parent::restoreWorkspace($args->toArray());
        return new RestoreWorkspaceResponse($result->toArray());
    }
}
