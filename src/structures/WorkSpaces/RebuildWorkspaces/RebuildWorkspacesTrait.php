<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebuildWorkspaces;

trait RebuildWorkspacesTrait
{
    /**
     * @param RebuildWorkspacesRequest $args
     * @return RebuildWorkspacesResponse
     */
    public function rebuildWorkspaces(RebuildWorkspacesRequest $args)
    {
        $result = parent::rebuildWorkspaces($args->toArray());
        return new RebuildWorkspacesResponse($result->toArray());
    }
}
