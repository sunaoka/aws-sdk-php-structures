<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspaceBundle;

trait UpdateWorkspaceBundleTrait
{
    /**
     * @param UpdateWorkspaceBundleRequest $args
     * @return UpdateWorkspaceBundleResponse
     */
    public function updateWorkspaceBundle(UpdateWorkspaceBundleRequest $args)
    {
        $result = parent::updateWorkspaceBundle($args->toArray());
        return new UpdateWorkspaceBundleResponse($result->toArray());
    }
}
