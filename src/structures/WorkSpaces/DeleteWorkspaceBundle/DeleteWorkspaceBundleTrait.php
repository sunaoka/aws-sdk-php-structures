<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeleteWorkspaceBundle;

trait DeleteWorkspaceBundleTrait
{
    /**
     * @param DeleteWorkspaceBundleRequest $args
     * @return DeleteWorkspaceBundleResponse
     */
    public function deleteWorkspaceBundle(DeleteWorkspaceBundleRequest $args)
    {
        $result = parent::deleteWorkspaceBundle($args->toArray());
        return new DeleteWorkspaceBundleResponse($result->toArray());
    }
}
