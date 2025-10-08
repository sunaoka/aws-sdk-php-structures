<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceBundle;

trait CreateWorkspaceBundleTrait
{
    /**
     * @param CreateWorkspaceBundleRequest $args
     * @return CreateWorkspaceBundleResponse
     */
    public function createWorkspaceBundle(CreateWorkspaceBundleRequest $args)
    {
        $result = parent::createWorkspaceBundle($args->toArray());
        return new CreateWorkspaceBundleResponse($result->toArray());
    }
}
