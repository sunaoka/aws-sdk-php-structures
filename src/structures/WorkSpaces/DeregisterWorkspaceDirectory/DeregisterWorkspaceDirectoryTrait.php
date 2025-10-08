<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeregisterWorkspaceDirectory;

trait DeregisterWorkspaceDirectoryTrait
{
    /**
     * @param DeregisterWorkspaceDirectoryRequest $args
     * @return DeregisterWorkspaceDirectoryResponse
     */
    public function deregisterWorkspaceDirectory(DeregisterWorkspaceDirectoryRequest $args)
    {
        $result = parent::deregisterWorkspaceDirectory($args->toArray());
        return new DeregisterWorkspaceDirectoryResponse($result->toArray());
    }
}
