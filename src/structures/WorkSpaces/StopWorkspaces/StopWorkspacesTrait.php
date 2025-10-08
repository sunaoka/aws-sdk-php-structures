<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\StopWorkspaces;

trait StopWorkspacesTrait
{
    /**
     * @param StopWorkspacesRequest $args
     * @return StopWorkspacesResponse
     */
    public function stopWorkspaces(StopWorkspacesRequest $args)
    {
        $result = parent::stopWorkspaces($args->toArray());
        return new StopWorkspacesResponse($result->toArray());
    }
}
