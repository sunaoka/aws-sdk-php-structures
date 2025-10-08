<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StartWorkspaces;

trait StartWorkspacesTrait
{
    /**
     * @param StartWorkspacesRequest $args
     * @return StartWorkspacesResponse
     */
    public function startWorkspaces(StartWorkspacesRequest $args)
    {
        $result = parent::startWorkspaces($args->toArray());
        return new StartWorkspacesResponse($result->toArray());
    }
}
